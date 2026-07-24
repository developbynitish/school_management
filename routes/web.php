<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Platform\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// TO GET DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
});

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
                        return view(
                            'platform.dashboard'
                        );
                    }
                )->name('dashboard');

                Route::post(
                    '/logout',
                    [AuthController::class, 'logout']
                )->name('logout');

            });
    });