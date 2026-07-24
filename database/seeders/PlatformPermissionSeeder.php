<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlatformPermission;

class PlatformPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [

            // Dashboard
            [
                'name' => 'View Dashboard',
                'slug' => 'dashboard.view',
                'module' => 'Dashboard',
                'status' => true,
            ],

            // Schools
            [
                'name' => 'View Schools',
                'slug' => 'school.view',
                'module' => 'School',
                'status' => true,
            ],
            [
                'name' => 'Create School',
                'slug' => 'school.create',
                'module' => 'School',
                'status' => true,
            ],
            [
                'name' => 'Edit School',
                'slug' => 'school.edit',
                'module' => 'School',
                'status' => true,
            ],
            [
                'name' => 'Activate School',
                'slug' => 'school.activate',
                'module' => 'School',
                'status' => true,
            ],
            [
                'name' => 'Suspend School',
                'slug' => 'school.suspend',
                'module' => 'School',
                'status' => true,
            ],

            // School Onboarding
            [
                'name' => 'View School Onboarding',
                'slug' => 'school_onboarding.view',
                'module' => 'School Onboarding',
                'status' => true,
            ],
            [
                'name' => 'Create School Onboarding',
                'slug' => 'school_onboarding.create',
                'module' => 'School Onboarding',
                'status' => true,
            ],
            [
                'name' => 'Edit School Onboarding',
                'slug' => 'school_onboarding.edit',
                'module' => 'School Onboarding',
                'status' => true,
            ],
            [
                'name' => 'Approve School Onboarding',
                'slug' => 'school_onboarding.approve',
                'module' => 'School Onboarding',
                'status' => true,
            ],
            [
                'name' => 'Reject School Onboarding',
                'slug' => 'school_onboarding.reject',
                'module' => 'School Onboarding',
                'status' => true,
            ],

            // Platform Employees
            [
                'name' => 'View Employees',
                'slug' => 'employee.view',
                'module' => 'Employee',
                'status' => true,
            ],
            [
                'name' => 'Create Employee',
                'slug' => 'employee.create',
                'module' => 'Employee',
                'status' => true,
            ],
            [
                'name' => 'Edit Employee',
                'slug' => 'employee.edit',
                'module' => 'Employee',
                'status' => true,
            ],
            [
                'name' => 'Delete Employee',
                'slug' => 'employee.delete',
                'module' => 'Employee',
                'status' => true,
            ],

            // Roles
            [
                'name' => 'View Roles',
                'slug' => 'role.view',
                'module' => 'Role',
                'status' => true,
            ],
            [
                'name' => 'Create Role',
                'slug' => 'role.create',
                'module' => 'Role',
                'status' => true,
            ],
            [
                'name' => 'Edit Role',
                'slug' => 'role.edit',
                'module' => 'Role',
                'status' => true,
            ],
            [
                'name' => 'Delete Role',
                'slug' => 'role.delete',
                'module' => 'Role',
                'status' => true,
            ],

            // Permissions
            [
                'name' => 'View Permissions',
                'slug' => 'permission.view',
                'module' => 'Permission',
                'status' => true,
            ],
            [
                'name' => 'Create Permission',
                'slug' => 'permission.create',
                'module' => 'Permission',
                'status' => true,
            ],
            [
                'name' => 'Edit Permission',
                'slug' => 'permission.edit',
                'module' => 'Permission',
                'status' => true,
            ],
            [
                'name' => 'Delete Permission',
                'slug' => 'permission.delete',
                'module' => 'Permission',
                'status' => true,
            ],

        ];

        foreach ($permissions as $permission) {
            PlatformPermission::updateOrCreate(
                [
                    'slug' => $permission['slug'],
                ],
                $permission
            );
        }
    }
}