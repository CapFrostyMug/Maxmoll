<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Maxmoll') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body class="bg-secondary bg-opacity-10">
    <div id="app" class="custom-st-wrapper">
        <div class="container bg-primary bg-opacity-75">
            @include('menu.index')
        </div>
        <main class="container bg-body custom-st-main">
            @yield('content')
        </main>
    </div>
</body>

</html>
