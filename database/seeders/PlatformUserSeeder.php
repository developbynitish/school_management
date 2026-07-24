<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlatformUser;
use App\Models\PlatformRole;
use Illuminate\Support\Facades\Hash;

class PlatformUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminRole = PlatformRole::where(
            'slug',
            'super-admin'
        )->first();

        if (!$superAdminRole) {
            return;
        }

        PlatformUser::updateOrCreate(
            [
                'email' => 'admin@example.com',
            ],
            [
                'employee_code' => 'EMP001',
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'admin@example.com',
                'mobile' => '9999999999',
                'password' => Hash::make('Admin@123'),
                'role_id' => $superAdminRole->id,
                'status' => true,
            ]
        );
    }
}