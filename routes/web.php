<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Platform\AuthController;
use App\Http\Controllers\Platform\Auth\PlatformLoginController;
use App\Http\Controllers\Platform\PlatformDashboardController;



Route::get('/', function () {
    return view('welcome');
});

// TO GET DASHBOARD
Route::get(
    '/dashboard',
    [PlatformDashboardController::class, 'index']
)->name('dashboard');

Route::prefix('superadmin')
    ->name('platform.')
    ->group(function () {

        // Login
        Route::get(
            '/login',
            [AuthController::class, 'showLogin']
        )->name('login');

        Route::post(
            '/login',
            [AuthController::class, 'login']
        )->name('login.submit');

        // Protected Routes
        Route::middleware('auth:platform')
            ->group(function () {

                Route::get(
                '/dashboard',
                function () {
                    return view('platform.dashboard');
                }
            )->name('dashboard');

                Route::post(
                    '/logout',
                    [AuthController::class, 'logout']
                )->name('logout');

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

            });
    });

Route::prefix('superadmin')->name('platform.')->group(function () {

    // Login
    Route::get(
        '/login',
        [PlatformLoginController::class, 'showLoginForm']
    )->name('login');

    Route::post(
        '/login',
        [PlatformLoginController::class, 'login']
    )->name('login.submit');

    Route::post(
        '/forgot-password',
        [PlatformForgotPasswordController::class, 'sendResetLink']
    )->name('password.email');


    // Authenticated Platform Routes
    Route::middleware('auth:platform')->group(function () {

        Route::get(
            '/dashboard',
            function () {
                return view('platform.dashboard');
            }
        )->name('dashboard');


        Route::post(
            '/logout',
            [PlatformLoginController::class, 'logout']
        )->name('logout');

    });

});

Route::prefix('superadmin')
    ->name('platform.')
    ->group(function () {

        Route::get(
            '/dashboard',
            [PlatformDashboardController::class, 'index']
        )->name('dashboard');

    });