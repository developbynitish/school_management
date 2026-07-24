<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('platform_users', function (Blueprint $table) {

            $table->id();

            $table->string('employee_code', 50)
                ->unique();

            $table->string('first_name', 100);
            $table->string('last_name', 100);

            $table->string('email')
                ->unique();

            $table->string('mobile', 20)
                ->nullable();

            $table->string('password');

            $table->foreignId('department_id')
                ->nullable()
                ->constrained('departments')
                ->nullOnDelete();

            $table->foreignId('designation_id')
                ->nullable()
                ->constrained('designations')
                ->nullOnDelete();

            $table->foreignId('role_id')
                ->constrained('platform_roles')
                ->restrictOnDelete();

            $table->string('profile_photo')
                ->nullable();

            $table->boolean('status')
                ->default(true);

            $table->timestamp('last_login_at')
                ->nullable();

            $table->timestamp('email_verified_at')
                ->nullable();

            $table->rememberToken();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('platform_users');
    }
};