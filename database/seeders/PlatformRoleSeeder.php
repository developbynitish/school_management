<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlatformRole;

class PlatformRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Super Admin',
                'slug' => 'super-admin',
                'status' => true,
            ],
            [
                'name' => 'Platform Admin',
                'slug' => 'platform-admin',
                'status' => true,
            ],
            [
                'name' => 'Support Manager',
                'slug' => 'support-manager',
                'status' => true,
            ],
            [
                'name' => 'Support Executive',
                'slug' => 'support-executive',
                'status' => true,
            ],
            [
                'name' => 'Backoffice Manager',
                'slug' => 'backoffice-manager',
                'status' => true,
            ],
            [
                'name' => 'Backoffice Executive',
                'slug' => 'backoffice-executive',
                'status' => true,
            ],
        ];

        foreach ($roles as $role) {
            PlatformRole::updateOrCreate(
                [
                    'slug' => $role['slug'],
                ],
                $role
            );
        }
    }
}