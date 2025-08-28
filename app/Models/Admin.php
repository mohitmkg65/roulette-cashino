<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models as Models;

class Admin extends Model
{
    use SoftDeletes;
    protected $guard = 'admin';
    protected $fillable = [
        'user_id',
        'role_id',
        'name',
        'address',
        'profile_image_path',
        'profile_image_name',
        
        'status',
        'created_by',
        'created_by_id',
        'created_by_ip_address',
        'modified_by',
        'modified_by_id',
        'modified_by_ip_address',
    ];

    public function role_privileges(){
        return $this->hasOne(Models\RolePrivilege::class, 'id', 'role_id');
    }
}
