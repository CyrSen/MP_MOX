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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Fonts -->

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"> --}}
    <!-- Scripts -->

    <!-- Directives -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/css/reset.css','node_modules/mdb-ui-kit/css/mdb.min.css', 'resources/css/custom.css']);

    <style>

    </style>
</head>

<body>

    <header>
       {{--  @include('layouts.navigation', ['feedbackMapId' => session('feedbackMapId')]) --}}
       {{-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
    <div class="container"><a class="navbar-brand" href="about.html"><strong>myOfficeX</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link active" href="about.html">Über</a></li>
          <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="feedback.html">Feedback</a></li>
          <li class="nav-item"><a class="nav-link" href="tips.html">tips</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Kontakt</a></li>
        </ul>
      </div>
    </div>
  </nav> --}}
    </header>

    <div id="app">
        <main class="py-4">
            @yield('content')

        </main>
    </div>


<!-- MDB -->
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script> --}}

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
@vite(['resources/js/app.js', 'resources/js/custom.js']);

 <script> 

/* NOISE-LEVEL -------------------------------- */
function setNoiseLevel(value) {
  document.getElementById('noise-level-input').value = value;
  console.log('Noise Level:', value);
}
/* TEMP-LEVEL -------------------------------- */

function setTempLevel(value) {
  document.getElementById('temperature-level-input').value = value;
  console.log('Temperature Level:', value);
}
/* AIRQ-LEVEL -------------------------------- */

function setAirQLevel(value) {
  document.getElementById('air-quality-level-input').value = value;
  console.log('AirQ Level:', value);
}
/* HIGGE-LEVEL -------------------------------- */

function setHiggeLevel(value) {
  document.getElementById('higge-level-input').value = value;
  console.log('Higge Level:', value);
}

</script>

</body>
</html>