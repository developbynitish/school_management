<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Platform RBAC
        $this->call([
            PlatformRoleSeeder::class,
            PlatformPermissionSeeder::class,
            PlatformRolePermissionSeeder::class,
            PlatformUserSeeder::class,
        ]);

        // Location Data
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
        ]);
    }
}