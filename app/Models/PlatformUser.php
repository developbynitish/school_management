<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlatformUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'platform_users';

    protected $fillable = [
        'employee_code',
        'first_name',
        'last_name',
        'email',
        'mobile',
        'password',
        'department_id',
        'designation_id',
        'role_id',
        'profile_photo',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'status' => 'boolean',
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function designation(): BelongsTo
    {
        return $this->belongsTo(Designation::class);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(
            PlatformRole::class,
            'role_id'
        );
    }
}