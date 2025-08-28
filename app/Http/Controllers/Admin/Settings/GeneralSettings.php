<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Models;
use Auth;

class GeneralSettings extends Controller
{
    public function index(){
        $general_settings = Models\GeneralSetting::where('status', 'active')->first();
        return view('Admin.Settings.general-setting', compact('general_settings'));
    }

    public function store(Request $request)
    {
        $id = $request->id;
        if ($request->has('contact_settings')){
            $input['email'] = $request->email;
            $input['mobile'] = $request->mobile;
            $input['address'] = $request->address;
            if (!empty($id)) {
                $input['modified_by'] = auth()->guard('admin')->user()->role;
                $input['modified_by_id'] = auth()->guard('admin')->user()->id;
                $input['modified_by_ip_address'] = $request->ip();
                Models\GeneralSetting::find($id)->update($input);
                return redirect('admin/general-setting')->with('success', 'Contact Settings updated successfully!');
            } else {
                $input['created_by'] = auth()->guard('admin')->user()->role;
                $input['created_by_id'] = auth()->guard('admin')->user()->id;
                $input['created_by_ip_address'] = $request->ip();
                Models\GeneralSetting::create($input);
                return redirect('admin/general-setting')->with('success', 'Contact Settings added successfully!');
            }
        }

        if ($request->has('social_media_settings')) {
            $input['facebook_url'] = $request->facebook_url;
            $input['instagram_url'] = $request->instagram_url;
            $input['linkedin_url'] = $request->linkedin_url;
            $input['twitter_url'] = $request->twitter_url;
            $input['skype_url'] = $request->skype_url;
            if (!empty($id)) {
                $input['modified_by'] = auth()->guard('admin')->user()->role;
                $input['modified_by_id'] = auth()->guard('admin')->user()->id;
                $input['modified_by_ip_address'] = $request->ip();
                Models\GeneralSetting::find($id)->update($input);
                return redirect('/admin/general-setting')->with('success', 'Social Media Settings updated successfully!');
            } else {
                $input['created_by'] = auth()->guard('admin')->user()->role;
                $input['created_by_id'] = auth()->guard('admin')->user()->id;
                $input['created_by_ip_address'] = $request->ip();
                Models\GeneralSetting::create($input);
                return redirect('/admin/general-setting')->with('success', 'Social Media Settings added successfully!');
            }
        }
    }
}
