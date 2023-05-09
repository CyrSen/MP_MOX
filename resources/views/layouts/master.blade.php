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

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNSxN9J" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 --}}
</body>
</html>