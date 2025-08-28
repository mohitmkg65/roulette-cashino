<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

use App\Models\Cims_master\Sub_category;

class BaseController extends Controller
{
    public function link_storage(Request $request){
        \Artisan::call('storage:link');
        return 'storage linked';
    }
    
    public function clear(Request $request){
        \Artisan::call('route:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('view:clear');
        \Artisan::call('config:clear');
        return 'clear';
    }

    public function not_found(){
        return view('Admin.NotFounds.404-not-found');
    }

    public function status(Request $request){
        if($request->action == "active_inactive"){
            $status = $request->model::where('id', $request->id)->value('status');
            $model = $request->model::find($request->id);
            $model->modified_by = 'admin';
            $model->modified_by_id = Auth::guard('admin')->user()->id;
            $model->modified_by_ip_address = $_SERVER['REMOTE_ADDR'];
            $model->status = $input['status'] = ($status == 'active' ? 'inactive' : 'active');
            $model->save();
        } else {
            $input['status'] = 'delete';
            $request->model::find($request->id)->delete();
        }
        return response()->json(['status' => true, 'message' => $request->flash, 'user_status' => $input['status']], 200);
    }
}