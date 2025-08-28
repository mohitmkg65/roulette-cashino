<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Models;
use Yajra\DataTables\DataTables;
use Crypt;

class ChipController extends Controller
{
    public function index(){
        return view('Admin.Master.chip');
    }

    public function store(Request $request){
        $id = $request->id;
        $input['value'] = $request->value;
        $input['color'] = $request->color;
        if (!empty($id)) {
            $input['modified_by'] = auth()->guard('admin')->user()->role;
            $input['modified_by_id'] = auth()->guard('admin')->user()->id;
            $input['modified_by_ip_address'] = $request->ip();
            Models\Chip::find($id)->update($input);
            return redirect('admin/master/chip')->with('success', 'Chip updated successfully!');
        } else {
            $input['created_by'] = auth()->guard('admin')->user()->role;
            $input['created_by_id'] = auth()->guard('admin')->user()->id;
            $input['created_by_ip_address'] = $request->ip();
            Models\Chip::create($input);
            return redirect('admin/master/chip')->with('success', 'Chip added successfully!');
        }
    }

    public function data_table(Request $request){
        $chips = Models\Chip::orderBy('id','DESC')->select('id', 'value', 'color', 'status')->get();
        if ($request->ajax()) {
            return DataTables::of($chips)
                ->addIndexColumn()
                ->addColumn('value', function ($row) {
                    return !empty($row->value) ? $row->value : '' ;
                })
                ->addColumn('color', function ($row) {
                    return !empty($row->color) ? $row->color : '' ;
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0)" data-id="' . $row->id . '" data-model="App\Models\Chip" data-action="active_inactive" data-flash="Status Changed Successfully!" class="change-status"><i class="fa fa-toggle-on tgle-on status_button" aria-hidden="true" title="Change status"></i></a>';
                    } else {
                        $statusActiveBtn = '<a href="javascript:void(0)" data-id="' . $row->id . '" data-model="App\Models\Chip" data-action="active_inactive" data-flash="Status Changed Successfully!" class="change-status"><i class="fa fa-toggle-off tgle-off status_button" aria-hidden="true" title="Change status"></i></a>';
                    }
                    return $statusActiveBtn;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button class="border-0 bg-white"><a href="' . url('admin/master/chip/edit/' . Crypt::encrypt($row->id) ) . '" class="btn btn-table-view"> <i class="fa-regular fa-edit"></i></a></button>';
                    $actionBtn .=  '<button class="border-0 bg-white"><a href="javascript:void;" data-id="' . $row->id . '" data-model="App\Models\Chip" data-action="delete" data-flash="Chip Deleted Successfully!" class="btn data-table-delete-btn btn-table-delete" title="Delete"><i class="fa-solid fa-trash-can"></i></a></button>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
    }

    public function edit($id){
        try {
            $id = Crypt::decrypt($id);
            $chip = Models\Chip::where('id', $id)->first();
            if(empty($chip))
                return redirect('/admin/master/chip')->with('error', 'Sorry! requested record is unavailable!');
            return view('Admin.Master.chip', compact('chip'));
        } 
        catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect('admin/master/chip')->with('error', 'Something Went Wrong!');
        }
    }
}
