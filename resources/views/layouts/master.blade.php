<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'myOﬃceX') }}</title>


    <!-- Iconsevices -->
    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>
    <!-- CSS-Animaitions -->
    <!-- Fonts -->
    <!-- Styles -->
    <!-- Scripts -->
    <!-- Directives -->
    @vite(['resources/sass/app.scss', 'resources/css/reset.css', 'resources/css/custom.css', 'resources/js/app.js']);



</head>



<body>

    <header>
        @include('layouts.navigation')
    </header>

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>