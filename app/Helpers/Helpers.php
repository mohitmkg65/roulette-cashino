<?php

namespace App\Helpers\Helpers;
use App\Models as Models;
use App\Models\Admin;
use App\Models\Role_privilege;
use App\Models\Visual_setting;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Helper {
    public static function getCreatedByName($id){
        return Models\User::where('status', 'active')->where('id', $id)->admin->name;
    }
    public static function getCreatedAtDateTime($date){
        return Carbon::createFromTimestamp(strtotime($date))->setTimezone('Asia/Kolkata')->format('d-m-Y h:i A');
    }
    public static function getCreatedAtDate($date){
        return Carbon::createFromTimestamp(strtotime($date))->setTimezone('Asia/Kolkata')->format('d-m-Y');
    }
    public static function getTimeFormat($time){
        return Carbon::createFromTimestamp(strtotime($time))->format('h:i A');
    }
    public static function getRoleName(){
        return Models\RolePrivilege::where('status', 'active')->where('id', Auth::guard('admin')->user()->role_id)->first()->name;
    }
    public static function getVisualImages(){
        return Models\VisualSetting::where('status', 'active')->first();
    }
}