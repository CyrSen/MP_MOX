<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'myOﬃceX') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/css/reset.css', 'resources/css/custom.css', 'resources/js/app.js'])
    <style>
        body {
            margin-top:12%
        }
        <style>

        #login {
        display: flex;
        align-items: stretch;
        min-height: 100vh;
        background: url("img/skyscraper-with-clouds-reflection.jpg") no-repeat center center;
        background-size: cover;
        position: relative;
        z-index: 1;
        }

        .rgba-black-strong {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7); /* Deckkraft hier ändern */
        z-index: -1;
        }

        .card.mb-5.wow.fadeInUp[data-wow-delay=".4s"] {
        flex: 1;
        }

        .card-body.p-5 {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        }

        .top-nav-collapse {
        background-color: #3949ab !important;
        }

        .navbar:not(.top-nav-collapse) {
        background: transparent !important;
        }

        @media (max-width: 768px) {
        .navbar:not(.top-nav-collapse) {
            background: #3949ab !important;
        }
        }

        @media (max-width: 450px) {
        .margins {
            margin-right: 1rem;
            margin-left: 1rem;
        }
        }

        footer {
        position: sticky;
        bottom: 0;
        }

    </style>
</head>
<body>

<header>
<!-- Navbar-->
    {{-- @include('layouts.navigation') --}}
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
    <div class="container"><a class="navbar-brand" href="about.html"><strong>myOfficeX</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>

          <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

          <li class="nav-item">
            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/feedback') }}">Feedback</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('/tips')) ? 'active' : '' }}" aria-current="page" href="{{ url('/tips') . '/' . session('feedbackMapId') }}">Tips</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#contact">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

    </header>

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
