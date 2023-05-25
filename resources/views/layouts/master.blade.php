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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css">
    
    <!-- Directives -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/css/reset.css','resources/css/css/mdb.min.css', 'resources/css/custom.css'])  

    <style>
      html {
      scroll-behavior: smooth;
      }
  
      #intro {
      background: url("img/panorama-3094696_1920.jpg") no-repeat center center;
      background-size: cover;
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
      /* ml-auto not working, see template*/
      .navTrick {
        margin-left: auto !important;
      }

      #intro .h6 {
      font-weight: 300;
      line-height: 1.7;
      }
  
      .site-bg-img {
      height: 100vh;
      min-height: 480px;
      max-height: 1080px;
      }
  
      .hm-gradient .site-bg-img {
      background: rgba(42, 27, 161, 0.7);
      background: linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
      }
  
      #feedback {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background: url("assets/img/architecture-4000.jpg") no-repeat center center;
      background-size: cover;
      position: relative;
      z-index: 1;
      }

      #indexPLACEHOLDER {
        /*  DAMIT MAN ETWAS SIEHT !!!*/
        background: url("assets/img/matthieu-gouiffes.jpg") no-repeat center center;
        min-height: 100vh;
      }
  
      .rgba-black-strong {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Deckkraft hier ändern */
      z-index: -1;
      }
  
      .card.mb-5.wow.fadeInLeft[data-wow-delay=".4s"],
      .card.mb-5.wow.fadeInRight[data-wow-delay=".4s"] {
      flex: 1;
      }
  
      .card-body.p-5 {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
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
  
      #info {
      display: flex;
      align-items: stretch;
      min-height: 100vh;
      background: url("img/open-window.jpg") no-repeat center center;
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
  
      #popup .modal-dialog-centered {
      margin: 0 auto;
      }
  
      .modal-header.bg-indigo {
      background-color: #3949ab;
      color: #ffffff;
      }
  
      .modal-body {
      padding: 1.5rem;
      }
  
      .btn-secondary {
      background-color: #3949ab;
      color: #ffffff;
      }
  
      .modal.shadow {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }
  
      .modal-dialog.modal-dialog-centered {
      max-width: 1000px; /* Anpassen der maximalen Breite */
      margin: 0 auto; /* Zentrierte Ausrichtung */
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
        <main class="py-4">
            @yield('content')

        </main>
    </div>

<!-- Footer-->
    <footer class="page-footer indigo darken-2 center-on-small-only pt-0 mt-0">
      <div class="footer-copyright text-center py-3 font-small">
        <div class="container-fluid">
          <div>&copy; myOfficeX</div>
        </div>
      </div>
    </footer>


<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
@vite(['resources/js/app.js','resources/js/wow.min.js','resources/js/mdb.min.js', 'resources/js/custom.js']);

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
<script>
  new WOW().init();
</script>
</body>
</html>