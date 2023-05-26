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
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    
    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css">
  
    
    <!-- Directives -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/css/reset.css','resources/css/mdb.min.css', 'resources/css/custom.css'])  

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');


body {
  background-image: url("assets/img/architecture.jpg") no-repeat center center;
}

  #intro {
    background: url("./assets/img/panorama-3094696_1920.jpg") no-repeat center center;
    background-size: cover; 
  }

  #feedback {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin:0;
    background: url("assets/img/architecture-4000.jpg") no-repeat center center;
    background-size: cover;
    position: relative;
    z-index: 1;
  }

  #tips{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin:0;
    background: url("assets/img/architecture.jpg") no-repeat center center;
    background-size: cover;
    position: relative;
    z-index: 1;
  }

  #indexPLACEHOLDER {
    /*  DAMIT MAN ETWAS SIEHT !!!*/
    background: url("assets/img/matthieu-gouiffes.jpg") no-repeat center center;
    min-height: 100vh;
    margin:0;
  }

  #login {
    display: flex;
    align-items: stretch;
    min-height: 100vh;
    background: url("./assets/img/skyscraper-with-clouds-reflection.jpg") no-repeat center center;
    background-size: cover;
    position: relative;
    z-index: 1;
  }

  #register {
      display: flex;
      align-items: stretch;
      min-height: 100vh;
      background: url("./assets/img/matthieu-gouiffes.jpg") no-repeat center center;
      background-size: cover;
      position: relative;
      z-index: 1;
    }

  #info {
    display: flex;
    align-items: stretch;
    min-height: 100vh;
    background: url("./assets/img/open-window.jpg") no-repeat center center;
    background-size: cover;
    position: relative;
    z-index: 1;
  }


  </style>


</head>

<body>

    <header>
<!-- Navbar-->
        @include('layouts.navigation', ['feedbackMapId' => session('feedbackMapId')])

<!-- Navbar-->
    </header>

    <div id="app">
      <main class="py-0 mt-0">
            @yield('content')

        </main>
    </div>

<!-- Footer-->
    <footer class="page-footer indigo darken-2 center-on-small-only pt-0 mt-0">
      <div class="footer-copyright text-center py-3 font-small">
        <div class="container-fluid">
          <div>&copy; myOffice<span class="highlight2">X</span></div>
        </div>
      </div>
    </footer>

    

    <script type="text/javascript" src="{{'js/jquery.min.js?ver=1.1.0'}}"></script>
    <script type="text/javascript" src="{{'/js/popper.min.js?ver=1.1.0'}}"></script>
    <script type="text/javascript" src="{{'js/wow.min.js?ver=1.1.0'}}"></script>
    <script type="text/javascript" src="{{'js/mdb.min.js?ver=1.1.0'}}"></script>

<script>
  new WOW().init();
</script>
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