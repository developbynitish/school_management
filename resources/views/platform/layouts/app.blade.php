<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>
        @yield('title', 'Platform Dashboard')
    </title>


    {{-- Vite CSS & JS --}}

    @vite([
        'resources/css/app.css',
        'resources/css/global.css',
        'resources/js/app.js'
    ])

    @stack('styles')

</head>


<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">


<div class="app-wrapper">


    {{-- ========================================================= --}}
    {{-- NAVBAR --}}
    {{-- ========================================================= --}}

    @include('platform.layouts.navbar')


    {{-- ========================================================= --}}
    {{-- SIDEBAR --}}
    {{-- ========================================================= --}}

    @include('platform.layouts.sidebar')


    {{-- ========================================================= --}}
    {{-- MAIN CONTENT --}}
    {{-- ========================================================= --}}

    <main class="app-main">

        @yield('content')

    </main>


    {{-- ========================================================= --}}
    {{-- FOOTER --}}
    {{-- ========================================================= --}}

    @include('platform.layouts.footer')


</div>


@stack('scripts')

</body>

</html>