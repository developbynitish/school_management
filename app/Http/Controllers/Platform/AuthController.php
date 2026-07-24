<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show Platform Login Page
     */
    public function showLogin()
    {
        return view('platform.auth.login');
    }

    /**
     * Handle Platform Login
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => [
                'required',
                'email',
            ],
            'password' => [
                'required',
            ],
        ]);

        $remember = $request->boolean('remember');

        if (Auth::guard('platform')->attempt($credentials, $remember)) {

            $request->session()->regenerate();

            $user = Auth::guard('platform')->user();

            if (!$user->status) {

                Auth::guard('platform')->logout();

                return back()
                    ->withErrors([
                        'email' => 'Your account is inactive.',
                    ])
                    ->onlyInput('email');
            }

            $user->update([
                'last_login_at' => now(),
            ]);

            return redirect()->intended(
                route('platform.dashboard')
            );
        }

        return back()
            ->withErrors([
                'email' => 'Invalid email or password.',
            ])
            ->onlyInput('email');
    }

    /**
     * Logout Platform User
     */
    public function logout(Request $request)
    {
        Auth::guard('platform')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route(
            'platform.login'
        );
    }
}