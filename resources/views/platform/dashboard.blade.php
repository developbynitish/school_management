<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Platform Dashboard</title>

</head>

<body>

    <h1>
        Welcome,
        {{ auth('platform')->user()->first_name }}
        {{ auth('platform')->user()->last_name }}
    </h1>

    <p>
        You are logged in to the Platform Portal.
    </p>

    <p>
        Role:
        {{ auth('platform')->user()->role->name }}
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