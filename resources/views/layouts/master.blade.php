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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- Fonts -->

    <!-- Styles -->
    
    <!-- Scripts -->

    <!-- Directives -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/css/reset.css', 'resources/css/custom.css']);

    <style>

    </style>

</head>



<body>

    <header>
        @include('layouts.navigation', ['feedbackMapId' => session('feedbackMapId')])
    </header>

    <div id="app">
        <main class="py-4">
            @yield('content')

        </main>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
@vite(['resources/js/app.js', 'resources/js/custom.js']);

 <script>
/* $(document).ready(function() {
    $('[data-bs-toggle="tooltip"]').tooltip();
}); */
/* const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl)) */

/* HIGGE-LEVEL -------------------------------- */
function setNoiseLevel(value) {
  document.getElementById('noise-level-input').value = value;
  console.log('Noise Level:', value);
}

function setTempLevel(value) {
  document.getElementById('temperature-level-input').value = value;
  console.log('Temperature Level:', value);
}

function setAirQLevel(value) {
  document.getElementById('air-quality-level-input').value = value;
  console.log('AirQ Level:', value);
}

function setHiggeLevel(value) {
  document.getElementById('higge-level-input').value = value;
  console.log('Higge Level:', value);
}




</script>

</body>
</html>