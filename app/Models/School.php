<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school_master';

    protected $fillable = [
        'name',
        'registration_code',
        'email',
        'alt_email',
        'mobile',
        'alt_mobile',
        'address_line1',
        'address_line2',
        'landmark',
        'state_id',
        'city_id',
        'pincode',
        'country_id',
        'latitude',
        'longitude',
        'logo',
        'medium',
        'email_verified_at',
        'mobile_verified_at',
        'is_active',
        'status',
        'last_login_at',
        'valid_upto',
        'approved_at',
        'approved_by'
    ];

    protected $casts = [
        'status' => 'boolean',
        'email_verified_at' => 'datetime',
        'mobile_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
    ];
}