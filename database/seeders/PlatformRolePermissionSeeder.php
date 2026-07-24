<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlatformRole;
use App\Models\PlatformPermission;

class PlatformRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Super Admin
        |--------------------------------------------------------------------------
        | Give all available permissions
        */
        $superAdmin = PlatformRole::where(
            'slug',
            'super-admin'
        )->first();

        if ($superAdmin) {

            $allPermissions = PlatformPermission::pluck('id');

            $superAdmin->permissions()->sync(
                $allPermissions
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Platform Admin
        |--------------------------------------------------------------------------
        */
        $platformAdmin = PlatformRole::where(
            'slug',
            'platform-admin'
        )->first();

        if ($platformAdmin) {

            $permissions = PlatformPermission::whereIn(
                'slug',
                [
                    'dashboard.view',

                    'school.view',
                    'school.create',
                    'school.edit',
                    'school.activate',

                    'school_onboarding.view',
                    'school_onboarding.create',
                    'school_onboarding.edit',
                    'school_onboarding.approve',

                    'employee.view',
                    'employee.create',
                    'employee.edit',

                    'role.view',
                    'permission.view',
                ]
            )->pluck('id');

            $platformAdmin->permissions()->sync(
                $permissions
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Support Manager
        |--------------------------------------------------------------------------
        */
        $supportManager = PlatformRole::where(
            'slug',
            'support-manager'
        )->first();

        if ($supportManager) {

            $permissions = PlatformPermission::whereIn(
                'slug',
                [
                    'dashboard.view',

                    'school.view',

                    'school_onboarding.view',

                    'employee.view',
                ]
            )->pluck('id');

            $supportManager->permissions()->sync(
                $permissions
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Support Executive
        |--------------------------------------------------------------------------
        */
        $supportExecutive = PlatformRole::where(
            'slug',
            'support-executive'
        )->first();

        if ($supportExecutive) {

            $permissions = PlatformPermission::whereIn(
                'slug',
                [
                    'dashboard.view',

                    'school.view',

                    'school_onboarding.view',
                ]
            )->pluck('id');

            $supportExecutive->permissions()->sync(
                $permissions
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Backoffice Manager
        |--------------------------------------------------------------------------
        */
        $backofficeManager = PlatformRole::where(
            'slug',
            'backoffice-manager'
        )->first();

        if ($backofficeManager) {

            $permissions = PlatformPermission::whereIn(
                'slug',
                [
                    'dashboard.view',

                    'school.view',
                    'school.create',
                    'school.edit',

                    'school_onboarding.view',
                    'school_onboarding.create',
                    'school_onboarding.edit',
                    'school_onboarding.approve',

                    'employee.view',
                ]
            )->pluck('id');

            $backofficeManager->permissions()->sync(
                $permissions
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Backoffice Executive
        |--------------------------------------------------------------------------
        */
        $backofficeExecutive = PlatformRole::where(
            'slug',
            'backoffice-executive'
        )->first();

        if ($backofficeExecutive) {

            $permissions = PlatformPermission::whereIn(
                'slug',
                [
                    'dashboard.view',

                    'school.view',

                    'school_onboarding.view',
                    'school_onboarding.create',
                    'school_onboarding.edit',
                ]
            )->pluck('id');

            $backofficeExecutive->permissions()->sync(
                $permissions
            );
        }
    }
}