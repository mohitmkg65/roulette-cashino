<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GeneralSetting extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'email',
        'mobile',
        'address',

        'facebook_url',
        'linkedin_url',
        'instagram_url',
        'twitter_url',
        'skype_url',

        'status',
        'created_by',
        'created_by_id',
        'created_by_ip_address',
        'modified_by',
        'modified_by_id',
        'modified_by_ip_address',
    ];
}
