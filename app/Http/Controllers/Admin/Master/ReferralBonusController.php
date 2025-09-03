<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Models;

class ReferralBonusController extends Controller
{
    public function index(){
        $referral_bonus = Models\ReferralBonus::where('status', 'active')->orderByDesc('id')->first();
        return view('Admin.Master.referral-bonus', compact('referral_bonus'));
    }

    public function store(Request $request){
        $id = $request->id;
        $input['referrer_bonus'] = $request->referrer_bonus;
        $input['referee_bonus'] = $request->referee_bonus;
        $input['agent_commission'] = $request->agent_commission;
        if (!empty($id)) {
            $input['modified_by'] = auth()->guard('admin')->user()->role;
            $input['modified_by_id'] = auth()->guard('admin')->user()->id;
            $input['modified_by_ip_address'] = $request->ip();
            Models\ReferralBonus::find($id)->update($input);
            return redirect('admin/master/referral-bonus')->with('success', 'Referral bonus and agent commission updated successfully!');
        } else {
            $input['created_by'] = auth()->guard('admin')->user()->role;
            $input['created_by_id'] = auth()->guard('admin')->user()->id;
            $input['created_by_ip_address'] = $request->ip();
            Models\ReferralBonus::create($input);
            return redirect('admin/master/referral-bonus')->with('success', 'Referral bonus and agent commission added successfully!');
        }
    }
}