<?php

namespace App\Http\Controllers\Admin\SystemUsers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Models;
use Yajra\DataTables\DataTables;
use Crypt;

class RolesPrivilegesController extends Controller
{
    public function index(){
        return view('Admin.System-users.roles-privileges');
    }

    public function create(){
        return view('Admin.System-users.add-roles-privileges');
    }

    public function store(Request $request){
        $id = $request->id;
        $request->validate([
            'role' => 'required|string',
            'privileges' => 'required',
        ]);
        if (!empty($id)) {
            if(Models\RolePrivilege::where('status','!=','delete')->where('id', '!=', $id)->where('role', $request->role)->exists()){
                return redirect()->back()->with('error', 'Sorry, This Role Has Already Been Taken !');
            }
            $input['role'] = $request->role;
            $input['privileges'] = implode(',', $request->privileges);
            $input['modified_by'] = auth()->guard('admin')->user()->role;
            $input['modified_by_id'] = auth()->guard('admin')->user()->id;
            $input['modified_by_ip_address'] = $request->ip();
            Models\RolePrivilege::find($id)->update($input);
            return redirect('admin/roles-privileges')->with('success', 'Roles Updated Successfully!');
        } else {
            if(Models\RolePrivilege::where('status','!=','delete')->where('role', $request->role)->exists()){
                return redirect()->back()->with('error', 'Sorry, This Role Has Already Been Taken !');
            }
            $input['role'] = $request->role;
            $input['privileges'] = implode(',', $request->privileges);
            $input['created_by'] = auth()->guard('admin')->user()->role;
            $input['created_by_id'] = auth()->guard('admin')->user()->id;
            $input['created_by_ip_address'] = $request->ip();
            Models\RolePrivilege::create($input);
            return redirect('admin/roles-privileges')->with('success', 'Roles Added Successfully!');
        }
    }

    public function data_table(Request $request){
        $roles_previleges = Models\RolePrivilege::orderBy('id','DESC')->select('id', 'role', 'privileges', 'status')->get();
        if ($request->ajax()) {
            return DataTables::of($roles_previleges)
                ->addIndexColumn()
                ->addColumn('role', function ($row) {
                    return !empty($row->role) ? $row->role : '' ;
                })
                ->addColumn('privileges', function ($row) {
                    return !empty($row->privileges) ? "<div class='scrollable-cell'>".implode(', ', explode(',',$row->privileges))."</div>" : '' ;
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0)" data-id="' . $row->id . '" data-model="App\Models\RolePrivilege" data-action="active_inactive" data-flash="Status Changed Successfully!" class="change-status"><i class="fa fa-toggle-on tgle-on status_button" aria-hidden="true" title="Change status"></i></a>';
                    } else {
                        $statusActiveBtn = '<a href="javascript:void(0)" data-id="' . $row->id . '" data-model="App\Models\RolePrivilege" data-action="active_inactive" data-flash="Status Changed Successfully!" class="change-status"><i class="fa fa-toggle-off tgle-off status_button" aria-hidden="true" title="Change status"></i></a>';
                    }
                    return $statusActiveBtn;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button class="border-0 bg-white"><a href="' . url('admin/roles-privileges/edit/' . $row->id ) . '" class="btn btn-table-view"> <i class="fa-regular fa-edit"></i></a></button>';
                    $actionBtn .=  ' <button class="border-0 bg-white"><a href="javascript:void;" data-id="' . $row->id . '" data-model="App\Models\RolePrivilege" data-action="delete" data-flash="Roles And Privileges Deleted Successfully!" class="btn data-table-delete-btn btn-table-delete" title="Delete"><i class="fa-solid fa-trash-can"></i></a></button>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'status', 'privileges'])
                ->make(true);
        }
    }

    public function edit($id){
        try {
            $role_privileges = Models\RolePrivilege::find($id);
            return view('Admin.System-users.add-roles-privileges', compact('role_privileges'));
        } 
        catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect('admin/roles-privileges')->with('error', 'Access Denied !');
        }
    }

    public function check_role_exist(Request $request){
        if(!empty($request->role_id)){
            if(RolePrivilege::where('id', '!=', $request->role_id)->where('status', '!=', 'delete')->where('role', $request->role)->exists()){
                return "true";
            } else {
                return "false";
            }
        } else {
            if(RolePrivilege::where('status', '!=', 'delete')->where('role', $request->role)->exists()){
                return "true";
            } else {
                return "false";
            }
        } 
    }
}
