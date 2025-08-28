<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class RolePrivilege extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'role',
        'privileges',

        'status',
        'created_by',
        'created_by_id',
        'created_by_ip_address',
        'modified_by',
        'modified_by_id',
        'modified_by_ip_address',
    ];
}
