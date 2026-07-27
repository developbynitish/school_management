<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Platform\AuthController;
use App\Http\Controllers\Platform\PlatformDashboardController;
use App\Http\Controllers\Platform\CountryController;
use App\Http\Controllers\Platform\StateController;
use App\Http\Controllers\Platform\CityController;


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Superadmin / Platform Routes
|--------------------------------------------------------------------------
*/

Route::prefix('superadmin')
    ->name('platform.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Authentication
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/login',
            [AuthController::class, 'showLogin']
        )->name('login');

        Route::post(
            '/login',
            [AuthController::class, 'login']
        )->name('login.submit');

        Route::post(
            '/forgot-password',
            [AuthController::class, 'sendResetLink']
        )->name('password.email');


        /*
        |--------------------------------------------------------------------------
        | Protected Platform Routes
        |--------------------------------------------------------------------------
        */

        Route::middleware('auth:platform')
            ->group(function () {

                /*
                |--------------------------------------------------------------------------
                | Dashboard
                |--------------------------------------------------------------------------
                */

                Route::get(
                    '/dashboard',
                    [PlatformDashboardController::class, 'index']
                )->name('dashboard');


                /*
                |--------------------------------------------------------------------------
                | Logout
                |--------------------------------------------------------------------------
                */

                Route::post(
                    '/logout',
                    [AuthController::class, 'logout']
                )->name('logout');


                /*
                |--------------------------------------------------------------------------
                | Schools
                |--------------------------------------------------------------------------
                */

                Route::get(
                    '/schools',
                    function () {
                        return 'All Schools';
                    }
                )->name('schools.index');


                Route::get(
                    '/schools/create',
                    function () {
                        return 'Add School';
                    }
                )->name('schools.create');


                /*
                |--------------------------------------------------------------------------
                | Countries
                |--------------------------------------------------------------------------
                */

                Route::get(
                    '/countries',
                    [CountryController::class, 'index']
                )->name('countries.index');

                /*
                |--------------------------------------------------------------------------
                | State
                |--------------------------------------------------------------------------
                */

                Route::get(
                    '/states',
                    [StateController::class, 'index']
                )->name('states.index');

                /*
                |--------------------------------------------------------------------------
                | City
                |--------------------------------------------------------------------------
                */

                Route::get(
                    '/cities',
                    [CityController::class, 'index']
                )->name('cities.index');

            });

    });