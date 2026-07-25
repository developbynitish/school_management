<!DOCTYPE html>
<html>

<head>

    <title>Platform Dashboard</title>

    @vite([
        'resources/css/app.css',
        'resources/css/global.css'
    ])

</head>

<body>

    <h1>
        Welcome to Platform Dashboard
    </h1>

    <p>
        Logged in as:
        {{ auth('platform')->user()->email }}
    </p>

    <form
        method="POST"
        action="{{ route('platform.logout') }}"
    >

        @csrf

        <button type="submit">
            Logout
        </button>

    </form>

</body>

</html>