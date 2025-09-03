<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReferralBonus extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'referrer_bonus',
        'referee_bonus',
        'agent_commission',

        'status',
        'created_by',
        'created_by_id',
        'created_by_ip_address',
        'modified_by',
        'modified_by_id',
        'modified_by_ip_address',
    ];
}
