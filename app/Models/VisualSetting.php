<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class VisualSetting extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'logo_image_path',
        'logo_image_name',
        'mini_logo_image_path',
        'mini_logo_image_name',
        'email_logo_image_path',
        'email_logo_image_name',
        'favicon_image_path',
        'favicon_image_name',

        'status',
        'created_by',
        'created_by_id',
        'created_by_ip_address',
        'modified_by',
        'modified_by_id',
        'modified_by_ip_address',
    ];
}
