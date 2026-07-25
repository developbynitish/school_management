<?php

namespace App\Http\Controllers\Platform\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlatformLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('platform.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => [
                'required',
                'email',
            ],

            'password' => [
                'required',
                'string',
            ],
        ]);

        $remember = $request->boolean('remember');

        if (Auth::guard('platform')->attempt($credentials, $remember)) {

            $request->session()->regenerate();

            return redirect()
                ->intended(route('platform.dashboard'));
        }

        return back()
            ->withErrors([
                'email' => 'The provided credentials are incorrect.',
            ])
            ->withInput(
                $request->only('email')
            );
    }

    public function logout(Request $request)
    {
        Auth::guard('platform')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('platform.login');
    }
}