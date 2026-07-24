<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Platform Login</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .login-container {
            width: 400px;
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }

    </style>

</head>

<body>

<div class="login-container">

    <h2>Platform Login</h2>

    @if ($errors->any())

        <div class="error">

            @foreach ($errors->all() as $error)

                <div>
                    {{ $error }}
                </div>

            @endforeach

        </div>

    @endif

    <form
        method="POST"
        action="{{ route('platform.login.submit') }}"
    >

        @csrf

        <div class="form-group">

            <label>
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >

        </div>

        <div class="form-group">

            <label>
                Password
            </label>

            <input
                type="password"
                name="password"
                required
            >

        </div>

        <div class="form-group">

            <label>

                <input
                    type="checkbox"
                    name="remember"
                    value="1"
                >

                Remember Me

            </label>

        </div>

        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>

</html>