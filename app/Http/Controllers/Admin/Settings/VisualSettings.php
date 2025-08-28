<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Models;
use App\Traits\MediaTrait;
use Auth;

class VisualSettings extends Controller
{
    use MediaTrait;
    public function index(){
        $visual_settings = Models\VisualSetting::where('status', 'active')->first();
        return view('admin.settings.visual-setting', compact('visual_settings'));
    }

    public function store(Request $request){
        $request->validate([
            'logo_image_path' => 'max:2048',
            'mini_logo_image_path' => 'max:2048',         
            'email_logo_image_path' => 'max:2048',
            'favicon_image_path' => 'max:2048',
        ]);

        $input = [];
        if(!empty($request->file())){
            $input = array_merge($input, $this->uploadFiles($request->file(), 'images/visuals'));
        }

        if(!empty($request->id)){
            $input['modified_by'] = auth()->guard('admin')->user()->role;
            $input['modified_by_id'] = auth()->guard('admin')->user()->id;
            $input['modified_by_ip_Address'] = $request->ip();
            Models\VisualSetting::find($request->id)->update($input);
            return redirect('admin/visual-setting')->with('success', 'Visual Settings updated successfully!');
        } else {
            $input['created_by'] = auth()->guard('admin')->user()->role;
            $input['created_by_id'] = auth()->guard('admin')->user()->id;
            $input['created_by_ip_Address'] = $request->ip();
            Models\VisualSetting::create($input);
            return redirect('admin/visual-setting')->with('success', 'Visual Settings added successfully!');
        }
    }
}
