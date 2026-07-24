<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('platform_role_permissions', function (Blueprint $table) {

            $table->id();

            $table->foreignId('role_id')
                ->constrained('platform_roles')
                ->cascadeOnDelete();

            $table->foreignId('permission_id')
                ->constrained('platform_permissions')
                ->cascadeOnDelete();

            $table->unique([
                'role_id',
                'permission_id',
            ]);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('platform_role_permissions');
    }
};