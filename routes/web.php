<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// TO GET DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
});