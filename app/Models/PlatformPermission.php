<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PlatformPermission extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'module',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            PlatformRole::class,
            'platform_role_permissions',
            'permission_id',
            'role_id'
        );
    }
}