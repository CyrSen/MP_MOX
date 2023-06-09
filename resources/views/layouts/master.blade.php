<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'myOﬃceX') }}</title>

    <link rel="icon" type="image/x-icon" href="./favicon.png">

    <!-- Iconsevices -->
    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>

    <!-- CSS-Animaitions -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('./css/mdb.min.css') }}" rel="stylesheet">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

    <!-- Scripts -->
    <script type="module" src="https://1.www.s81c.com/common/carbon/web-components/tag/latest/date-picker.min.js"></script>

    <!-- Directives -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/css/custom.css'])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');


        body {
            background-image: url("./assets/img/architecture.jpg") no-repeat center center;
        }

        #intro {
            background: url("./assets/img/panorama-3094696_1920.jpg") no-repeat center center;
            background-size: cover;
        }

        .navbar.collapsing-bg {
        background-color: #3f51b5 !important;
        }

        /* filter Calendar Icon for Google-Chrome visibility*/
        input[type=date]::-webkit-calendar-picker-indicator {
        filter: invert(1);
        }
        
        @media (max-width: 480px) {

            #feedback {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 105vh;
                margin-top: ;
                background: url("./assets/img/architecture-4000.jpg") no-repeat center center;
                background-size: cover;
                position: relative;
                z-index: 1;
            }

            #admin {
                margin-top: 0rem;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                position: relative;
                min-width: 100vw;
                background-image: url("./assets/img/panorama-3094696_1920.jpg");
                background-size: cover;
                z-index: 1;
                padding-top: 10%;
                background-size: cover;
            }

            #danke  {
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                background-size: 100% 100%;
                position: relative;
                min-width: 100vw;
                z-index: 1;
                background-image: url('{{ asset('assets/img/architecture-4000_lowres.jpg') }}');
                display: flex;
            }

            #contact {
                align-items: center;
                justify-content: center;
                min-height: 128vh;
                background-size: 100% 100%;
                position: relative;
                min-width: 100vw;
                background-image: url("./assets/img/panorama-3094696_1920_mobile.jpg");
                z-index: 1;
                padding-top: 10%;
                background-size: cover;
            }

            #impressum {
                align-items: center;
                justify-content: center;
                min-height: 128vh;
                background-size: 100% 100%;
                position: relative;
                min-width: 100vw;
                background-image: url("./assets/img/panorama-3094696_1920.jpg");
                z-index: 1;
                padding-top: 10%;
                background-size: cover;
            }

            .custom-tooltip {
                --bs-tooltip-color: #110080 !important;
                --bs-tooltip-bg:  #ffffff !important;
                --bs-tooltip-border-radius: 10px! important;
                --bs-tooltip-tooltip-arrow-width: 1.2rem !important;
                --bs-tooltip-tooltip-arrow-height: 1rem !important;                
            }
        }

        @media (max-width: 800px) and (orientation: landscape) {
            #contact {
                align-items: center;
                justify-content: center;
                min-height: 120vh;
                background-size: 100% 100%;
                position: relative;
                min-width: 100vw;
                background-image: url("./assets/img/panorama-3094696_1920.jpg");
                z-index: 1;
                padding-top: 10%;
            }
        }

        @media (min-width: 800px)  and (orientation: landscape) {

            #feedback {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 97vh;
                margin-top: ;
                background: url("./assets/img/architecture-4000_lowres.jpg") no-repeat center center;
                background-size: cover;
                position: relative;
                z-index: 1;
            }

            #admin {
                margin-top: -8.5rem;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                position: relative;
                min-width: 100vw;
                background-image: url("./assets/img/panorama-3094696_1920.jpg");
                background-size: cover;
                z-index: 1;
                padding-top: 10%;
            }

            #danke  {
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                background-size: 100% 100%;
                position: relative;
                min-width: 100vw;
                z-index: 1;
                background-image: url('{{ asset('assets/img/architecture-4000_lowres.jpg') }}');
                display: flex;
            }

            #contact {
                align-items: center;
                justify-content: center;
                min-height: 93vh;
                background-size: 100% 100%;
                position: relative;
                min-width: 100vw;
                background-image: url("./assets/img/panorama-3094696_1920.jpg");
                z-index: 1;
                padding-top: 10%;
            }

            #impressum {
                align-items: center;
                justify-content: center;
                min-height: 128vh;
                background-size: 100% 100%;
                position: relative;
                min-width: 100vw;
                background-image: url("./assets/img/panorama-3094696_1920.jpg");
                z-index: 1;
                padding-top: 10%;
                background-size: cover;
            }


            .custom-tooltip {
                --bs-tooltip-color: #110080 !important;
                --bs-tooltip-bg: #ffffff !important;
                --bs-tooltip-border-radius: 10px! important;
                --bs-tooltip-tooltip-arrow-width: 1.2rem !important;
                --bs-tooltip-tooltip-arrow-height: 1rem !important;
            }

        }

        .feedbackPanels {
            position: relative;
            top: 2rem;
        }

        .templow {
            color: #37f2ff;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            font-size: 125%;
        }

        .temphigh {
            color: #fd0d0d;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            font-size: 125%;
        }

        .imageIcons {
            height: 20px;
            width: auto;
        }

        #indexPLACEHOLDER {
            /*  DAMIT MAN ETWAS SIEHT !!!*/
            background: url("assets/img/matthieu-gouiffes_lowres.jpg") no-repeat center center;
            min-height: 100vh;
            margin: 0;
        }

        #login {
            display: flex;
            align-items: stretch;
            min-height: 100vh;
            background: url("./assets/img/skyscraper-with-clouds-reflection_lowres.jpg") no-repeat center center;
            background-size: cover;
            position: relative;
            z-index: 1;
        }

        #register {
            display: flex;
            align-items: stretch;
            min-height: 100vh;
            background: url("./assets/img/matthieu-gouiffes_lowres.jpg") no-repeat center center;
            background-size: cover;
            position: relative;
            z-index: 1;
        }

        #info {
            display: flex;
            align-items: stretch;
            min-height: 100vh;
            background: url("{{ asset('assets/img/open-window_lowres.jpg') }}") no-repeat center center;
            background-size: cover;
            position: relative;
            z-index: 1;
        }

        {{ asset('assets/img/open-window_lowres.jpg') }} #tips {
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-size: 100% 100%;
            position: relative;
            min-width: 100vw;
            background-image: url("{{ asset('assets/img/panorama-3094696_1920.jpg') }}");
            z-index: 1;
            margin-top: -10%;
            padding-top: 10%;
        }

    </style>

</head>

<body id="top">

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

    <div class="scroll-buttons">
        <div class="scroll-button" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
            <i class="fa fa-arrow-up"></i>
        </div>
        <div class="d-inline-block">
            <span style="color:transparent;font-weight: 400">&copy; myOfficeX</span><p.text-white | <a href="{{ url('/impressum') }}"
                style="color:transparent;font-weight: 400">Impressum</a>
        </div>
        <div class="scroll-button" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' })">
            <i class="fa fa-arrow-down"></i>
        </div>
    </div>

    <!-- Footer-->
    <footer class="page-footer fixed-bottom indigo darken-2 center-on-small-only p-3 mt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="d-inline-block">
                        <span style="font-weight: 400">&copy; myOfficeX</span> | <a href="{{ url('/impressum') }}"
                            style="font-weight: 400;">Impressum</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script> --}}
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js" integrity="sha512-XFd1m0eHgU1F05yOmuzEklFHtiacLVbtdBufAyZwFR0zfcq7vc6iJuxerGPyVFOXlPGgM8Uhem9gwzMI8SJ5uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        new WOW().init();

        $(function() {
            $('[data-bs-toggle="custom-tooltip"]').tooltip();
            $('[data-bs-toggle="popover"]').popover({
                html: true
            })


        });

        function openPopup(popupId) {
            $('#' + popupId).modal('show');
        }
    </script>


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
        
        /* TOGGLE NAVBAR -------------------------------- */
                function toggleNavbarBackground() {
            const navbarCollapse = document.getElementById('navbar');
            navbarCollapse.classList.toggle('collapsing-bg');
        }
    </script>

</body>

</html>
