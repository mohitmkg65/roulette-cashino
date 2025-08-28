<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use App\Models as Models;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;
    protected $guard = 'admin';

    protected $fillable = [
        'code',
        'role',
        'is_system_user',
        'mobile',
        'email',
        'password',
        'mobile_verified_at',
        'email_verified_at',
        'last_login',
        'fcm_token',
        'otp',
        
        'status',
        'created_by',
        'created_by_id',
        'created_by_ip_address',
        'modified_by',
        'modified_by_id',
        'modified_by_ip_address',
    ];

    public function admin(){
        return $this->hasOne(Models\Admin::class);
    }
}
