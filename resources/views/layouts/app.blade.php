<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'myOﬃceX') }}</title>

    <!-- Iconsevices -->
    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>
    
    <!-- CSS-Animaitions -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css">

    <!-- Directives -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/css/css/mdb.min.css',  'resources/css/reset.css', 'resources/css/custom.css'])  

  

</head>
<body>

<header>
<!-- Navbar-->
    {{-- @include('layouts.navigation') --}}
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
    <div class="container"><a class="navbar-brand" href="about.html"><strong>myOfficeX</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ml-auto navTrick">

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
            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/admin') }}">Administration</a>
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
        <main class="py-0 mt-0">
            @yield('content')
        </main>
    </div>

    <!-- Footer-->
    <footer class="page-footer indigo darken-2 center-on-small-only pt-0 mt-0 md-mt-">
      <div class="footer-copyright text-center py-3 font-small">
        <div class="container-fluid">
          <div>&copy; myOffice<span class="highlight2">X</span></div>
        </div>
      </div>
    </footer>

{{--  <script type="text/javascript" src="{{'js/jquery.min.js?ver=1.1.0'}}"></script>
<script type="text/javascript" src="{{'/js/popper.min.js?ver=1.1.0'}}"></script>
<script type="text/javascript" src="{{'js/wow.min.js?ver=1.1.0'}}"></script>
<script type="text/javascript" src="{{'js/mdb.min.js?ver=1.1.0'}}"></script> --}}
{{--
<script>
  new WOW().init();
</script> --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
@vite(['resources/js/app.js','resources/js/wow.min.js','resources/js/mdb.min.js', 'resources/js/custom.js']);

 <script> 
