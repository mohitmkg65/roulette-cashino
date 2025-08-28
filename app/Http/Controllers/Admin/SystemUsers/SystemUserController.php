<?php

namespace App\Http\Controllers\Admin\SystemUsers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades as Facades;
use Yajra\DataTables\DataTables;
use App\Traits\MediaTrait;
use App\Models as Models;
use Crypt;

class SystemUserController extends Controller
{
    use MediaTrait;

    public function index(){
        return view('Admin.System-users.system-user');
    }

    public function create(Request $request){
        $all_roles = Models\RolePrivilege::where('status', 'active')->orderBy('id', 'DESC')->get();
        return view('Admin.System-users.add-system-user', compact('all_roles'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'mobile' => 'numeric',
            'profile_image_path' => 'max:2048'
        ]);
        
        $user_input['role'] = 'admin';
        $user_input['is_system_user'] = true;
        $user_input['mobile'] = $request->mobile;
        $user_input['email'] = $request->email;

        $admin_input['role_id'] = $request->role;
        $admin_input['name'] = $request->name;
        $admin_input['address'] = $request->address;
        if(!empty($request->file()) && $request->has('profile_image_path')){
            $admin_input = array_merge($admin_input, $this->uploadFiles($request->file(), 'images/visuals'));
        }

        if (!empty($request->id)) {
            if(Models\User::where('id', '!=', $request->id)->where('email', $request->email)->exists()){
                return redirect()->back()->with('error', 'Sorry, This Email Has Already Been Taken !');
            }
            
            $user_input['modified_by'] = 'admin';
            $user_input['modified_by_id'] = auth()->guard('admin')->user()->id;
            $user_input['modified_by_ip_address'] = $request->ip();
            $response = Models\User::find($request->id)->update($user_input);
            
            $admin_input['modified_by'] = 'admin';
            $admin_input['modified_by_id'] = auth()->guard('admin')->user()->id;
            $admin_input['modified_by_ip_address'] = $request->ip();
            $response = Models\Admin::where('user_id', $request->id)->update($admin_input);
            return redirect('admin/system-user')->with('success', 'User List Updated Successfully!');
        } else {
            $request->validate([
                'password' => 'required|min:8',
            ]);

            if(Models\User::where('status','!=','delete')->where('email', $request->email)->exists()){
                return redirect()->back()->with('error', 'Sorry, This Email Has Already Been Taken !');
            }
            $user_input['password'] = Facades\Hash::make($request->email);
            $user_input['created_by'] = 'admin';
            $user_input['created_by_id'] = auth()->guard('admin')->user()->id;
            $user_input['created_by_ip_address'] = $request->ip();
            $response = models\User::create($user_input);

            $code = "RCO".date('dmY').$response->id;
            Models\User::find($response->id)->update(['code' => $code]);

            $admin_input['user_id'] = $response->id;
            $admin_input['created_by'] = 'admin';
            $admin_input['created_by_id'] = auth()->guard('admin')->user()->id;
            $admin_input['created_by_ip_address'] = $request->ip();
            $response = Models\Admin::create($admin_input);
            return redirect('admin/system-user')->with('success', 'User List Added Successfully!');
        }
    }

    public function data_table(Request $request){
        $system_user = Models\User::where('role', 'admin')->where('is_system_user', true)->orderBy('id', 'DESC')->select('id', 'code', 'role', 'is_system_user', 'mobile', 'email', 'status')->with(['admin' => function($query){
            $query->select('id', 'user_id', 'role_id', 'name', 'address', 'profile_image_path', 'profile_image_name');
            $query->with(['role_privileges' => function($query){
                $query->select('id', 'role');
            }]);
        }])->orderBy('id', 'DESC')->get();
        if ($request->ajax()) {
            return DataTables::of($system_user)
                ->addIndexColumn()
                ->addColumn('name', function ($row) {
                    return !empty($row->admin->name) ? $row->admin->name : '' ;
                })
                ->addColumn('role', function ($row) {
                    return !empty($row->admin->role_privileges->role) ? $row->admin->role_privileges->role : '' ;
                })
                ->addColumn('mobile', function ($row) {
                    return !empty($row->mobile) ? $row->mobile : '' ;
                })
                ->addColumn('email', function ($row) {
                    return !empty($row->email) ? $row->email : '' ;
                })
               ->addColumn('status', function ($row) {
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0)" data-id="' . $row->id . '" data-model="App\Models\User" data-action="active_inactive" data-flash="Status Changed Successfully!" class="change-status"><i class="fa fa-toggle-on tgle-on status_button" aria-hidden="true" title="Change status"></i></a>';
                    } else {
                        $statusActiveBtn = '<a href="javascript:void(0)" data-id="' . $row->id . '" data-model="App\Models\User" data-action="active_inactive" data-flash="Status Changed Successfully!" class="change-status"><i class="fa fa-toggle-off tgle-off status_button" aria-hidden="true" title="Change status"></i></a>';
                    }
                    return $statusActiveBtn;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button class="border-0 bg-white"><a href="' . url('admin/system-user/edit/' . $row->id ) . '" class="btn btn-table-view"> <i class="fa-regular fa-edit"></i></a></button>';
                    $actionBtn .=  ' <button class="border-0 bg-white"><a href="javascript:void;" data-id="' . $row->id . '" data-model="App\Models\User" data-action="delete" data-flash="System User Deleted Successfully!" class="btn data-table-delete-btn btn-table-delete" title="Delete"><i class="fa-solid fa-trash-can"></i></a></button>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
    }

    public function edit($id){
        try {
            $all_roles = Models\RolePrivilege::where('status', 'active')->orderBy('id', 'DESC')->get();
            $user = Models\User::find($id);
            return view('Admin.System-users.add-system-user', compact('all_roles', 'user'));
        } 
        catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect('admin/system-user')->with('error', 'Access Denied !');
        }
    }

    public function check_user_exist(Request $request){
        if(!empty($request->user_id)){
            if(Admin::where('id', '!=', $request->user_id)->where('status', '!=', 'delete')->where('email', $request->email)->exists()){
                return "true";
            } else {
                return "false";
            }
        } else {
            if(Admin::where('status', '!=', 'delete')->where('email', $request->email)->exists()){
                return "true";
            } else {
                return "false";
            }
        } 
    }
}
