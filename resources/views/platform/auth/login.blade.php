<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>
        Platform Login
    </title>

    <link rel="stylesheet"
      href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">

    @vite([
        'resources/css/app.css',
        'resources/css/global.css',
        'resources/js/app.js',
        'resources/js/platform/login.js'
    ])


</head>

<body class="platform-login-page">

    <div class="platform-login-card-wrapper">

    <div class="platform-login-card-inner">

        {{-- =========================
             LOGIN SIDE
        ========================== --}}

        <div class="platform-login-card-face platform-login-front">

            <div class="platform-login-header">

                <div class="platform-logo">
                    <i class="fas fa-school"></i>
                </div>

                <h1 class="platform-title">
                    School Management
                </h1>

                <div class="platform-subtitle">
                    Platform Administration Portal
                </div>

            </div>


            <div class="platform-login-body">

                @if ($errors->any())

                    <div class="alert platform-alert mb-4">

                        <div class="d-flex align-items-start">

                            <i class="fas fa-exclamation-circle mr-2 mt-1"></i>

                            <div>

                                @foreach ($errors->all() as $error)

                                    <div>
                                        {{ $error }}
                                    </div>

                                @endforeach

                            </div>

                        </div>

                    </div>

                @endif


                {{-- Login Form --}}

                <form
                    method="POST"
                    id="platformLoginForm"
                    action="{{ route('platform.login.submit') }}"
                >

                    @csrf


                    {{-- Email --}}

                    <div class="platform-input-group">


                        <input
                            type="email"
                            name="email"
                            class="form-control platform-input"
                            placeholder="Email address"
                            value="{{ old('email') }}"
                            autocomplete="email"
                        >

                    </div>


                    {{-- Password --}}

                    <div class="platform-input-group">


                        <input
                            type="password"
                            name="password"
                            class="form-control platform-input"
                            placeholder="Password"
                            autocomplete="current-password"
                        >

                    </div>


                    {{-- Remember Me --}}

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div class="icheck-primary">

                            <input
                                type="checkbox"
                                id="remember"
                                name="remember"
                                value="1"
                            >

                            <label for="remember">
                                Remember Me
                            </label>

                        </div>


                        {{-- Forgot Password --}}

                        <a
                            href="javascript:void(0)"
                            id="showForgotPassword"
                            class="forgot-password-link"
                        >
                            Forgot Password?
                        </a>

                    </div>


                    <button
                        type="submit"
                        class="btn platform-login-button"
                    >

                        <i class="fas fa-sign-in-alt mr-2"></i>

                        Login

                    </button>

                </form>

            </div>

        </div>


        {{-- =========================
             FORGOT PASSWORD SIDE
        ========================== --}}

        <div class="platform-login-card-face platform-login-back">

            <div class="platform-login-header">

                <div class="platform-logo">

                    <i class="fas fa-key"></i>

                </div>

                <h1 class="platform-title">
                    Forgot Password?
                </h1>

                <div class="platform-subtitle">

                    Enter your email to receive a
                    password reset link.

                </div>

            </div>


            <div class="platform-login-body">


                {{-- Forgot Password Form --}}

                <form
                    method="POST"
                    id="platformForgotPasswordForm"
                    action="{{ route('platform.password.email') }}"
                >

                    @csrf


                    <div class="platform-input-group">

                        <input
                            type="email"
                            name="email"
                            class="form-control platform-input"
                            placeholder="Enter your email address"
                            autocomplete="email"
                        >

                    </div>


                    <button
                        type="submit"
                        class="btn platform-login-button mb-3"
                    >

                        <i class="fas fa-paper-plane mr-2"></i>

                        Send Reset Link

                    </button>


                    <div class="text-center">

                        <a
                            href="javascript:void(0)"
                            id="showLogin"
                            class="forgot-password-link"
                        >

                            <i class="fas fa-arrow-left mr-1"></i>

                            Back to Login

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</body>



</html>