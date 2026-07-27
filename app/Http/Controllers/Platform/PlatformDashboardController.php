<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Models\School;
use App\Models\PlatformUser;

class PlatformDashboardController extends Controller
{
    public function index()
    {
        $totalSchools = School::count();

        $activeSchools = School::where('is_active', true)->count();

        $pendingRequest = School::where('status', 'pending')->count();

        $totalemployee = PlatformUser::where('status', true)->count();

        return view('platform.dashboard', compact(
            'totalSchools',
            'activeSchools',
            'pendingRequest',
            'totalemployee'
        ));
    }
}