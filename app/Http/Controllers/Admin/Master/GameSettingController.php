<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Models;

class GameSettingController extends Controller
{
    public function index(){
        $game_setting = Models\GameSetting::where('status', 'active')->orderByDesc('id')->first();
        return view('Admin.Master.game-setting', compact('game_setting'));
    }

    public function store(Request $request){
        $id = $request->id;
        $input['total_time'] = $request->total_time;
        $input['game_time'] = $request->game_time;
        $input['result_time'] = $request->result_time;
        if (!empty($id)) {
            $input['modified_by'] = auth()->guard('admin')->user()->role;
            $input['modified_by_id'] = auth()->guard('admin')->user()->id;
            $input['modified_by_ip_address'] = $request->ip();
            Models\GameSetting::find($id)->update($input);
            return redirect('admin/master/game-setting')->with('success', 'Game setting updated successfully!');
        } else {
            $input['created_by'] = auth()->guard('admin')->user()->role;
            $input['created_by_id'] = auth()->guard('admin')->user()->id;
            $input['created_by_ip_address'] = $request->ip();
            Models\GameSetting::create($input);
            return redirect('admin/master/game-setting')->with('success', 'Game setting added successfully!');
        }
    }
}
