@extends('layouts.master')

@section('title', 'myOfficeX')

@section('content')


    <!-- Intro Section -->
    <section class="view hm-gradient" id="intro">
        <div class="site-bg-img d-flex align-items-center">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-10 col-lg-6 text-md-left margins">
                        <div class="white-text">
                            <div class="wow fadeInLeft" data-wow-delay="0.3s">
                                <h1 class="h1-responsive font-weight-bold mt-sm-5">Unser Ziel: Dein Komfort</h1>
                                <div class="h6">
                                    Du hast genug von Lärm, unangenehmen Temperaturen und schlechter Luft? Mit myOfficeX
                                    gibst du anonym Feedback zu deinem Arbeitsplatzkomfort. Die App nutzt dieses Feedback
                                    für kontinuierliche Verbesserungen. Dein Büro wird zu einem Ort, an dem du dich
                                    wohlfühlst und optimal arbeiten kannst.
                                </div>
                            </div>
                        </div><br>
                        @guest
                            {{-- <h3 class="lead text-white"><strong>Einloggen und an der Umfrage teilnehmen</strong></h3> --}}
                            <div class="wow fadeInLeft" data-wow-delay="0.3s">
                                <a class="btn btn-white dark-grey-text font-weight-bold ml-0" href="{{ route('login') }}"
                                    target="">
                                    <i class="fa fa-play mr-1"></i>{{ __(' App nutzen') }}
                                </a>
                                <a class="btn btn-outline-white font-weight-bold"
                                    href="{{ asset('assets/documents/whitepaper.pdf') }}">PDF</a>
                            </div>

                        @endguest

                        @auth
                            <div class="wow fadeInLeft" data-wow-delay="0.3s">
                                <a class="btn btn-white dark-grey-text font-weight-bold ml-0" href="{{ route('login') }}"
                                    target="">
                                    <i class="fa fa-play mr-1"></i>{{ __(' App nutzen') }}
                                </a>
                                <a class="btn btn-outline-white font-weight-bold"
                                    href="{{ asset('assets/documents/whitepaper.pdf') }}">PDF</a>
                            </div>

                            {{-- <div class="text-center pt-3">
                                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                                    href="{{ url('/feedback') }}">
                                    <button class="btn btn-lg btn-indigo text-white" style="display:none">
                                        Umfrage Wiederholen
                                    </button>
                                </a>
                            </div> --}}
                        @endauth

                        {{--  <div class=" mt-3">
                            <ul class="navbar-nav me-auto">
                                @if (Route::has('login'))
                                @auth
                                <li class="nav-item">
                                    <a href="{{ url('/  ') }}" class="nav-link waves-effect waves-light">Home</a>
                                </li>        
                                @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-item">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-item">Register</a>
                                </li>
                                @endif
                                @endauth
                                @endif
                                </ul>
                        </div> --}}
                    </div>
                    <div class="arrow-circle mb-5">
                        <a class="arrow-link" href="#nutzen">
                            <i class="fa fa-arrow-down"></i>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <!-- Nutzen Section -->
    <section class="text-center py-5 grey
 lighten-4" id="nutzen">
        <div class="container">
            <div class="wow fadeIn">
                <h2 class="h1 pt-5 pb-3">Welchen Nutzen hat myOfficeX für dich?</h2>
                <p class="mb-5 pb-3 lead dark-grey-text custom-font-weight">
                    Die myOfficeX-App ermöglicht es dir, anonym Feedback zu deinem Arbeitsplatzkomfort zu geben. Das
                    Feedback und Informationen über das Gebäude werden genutzt, um verschiedene Verbesserungen zu
                    ermöglichen:
                </p>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <i class="fa fa-user fa-3x orange-text"></i>
                    <h3 class="h4 mt-3">Individualkomfort</h3>
                    <p class="mt-3 blue-grey-text custom-font-weight">
                        Basierend auf deinem Feedback erhältst du massgeschneiderte Empfehlungen zur Verbesserung deines
                        Arbeitsplatzkomforts.
                    </p>
                    <p class="mt-2 blue-grey-text custom-font-weight"> Beispiel: Die Feedback App schlägt dir eine wärmere
                        Bürozone auf der Südseite des Gebäudes vor, wenn du angibst dir sei kalt.
                    </p>
                </div>
                <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".4s">
                    <i class="fa fa-users fa-3x cyan-text"></i>
                    <h3 class="h4 mt-3">Gesamtkomfort</h3>
                    <p class="mt-3 blue-grey-text custom-font-weight">
                        Durch Zusammenführung aller Feedbacks erkennt das Management, wenn es ein breiteres Problem mit dem
                        Arbeitsplatzkomfort gibt.
                    </p>
                    <p class="mt-2 blue-grey-text custom-font-weight"> Beispiel: Das Management ergreift Massnahmen für eine
                        angenehmere Raumtemperatur, wenn viele Mitarbeitende angeben, dass sie frieren.
                    </p>
                </div>
                <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".5s">
                    <i class="fa fa-leaf fa-3x green-text"></i>
                    <h3 class="h4 mt-3">Energieeffizienz</h3>
                    <p class="mt-3 blue-grey-text custom-font-weight">
                        Durch Abgleich von Feedback- und Messdaten aus dem Gebäude werden Potenziale zur Verbesserung der
                        Energieeffizienz aufgedeckt.
                    </p>
                    <p class="mt-3 blue-grey-text custom-font-weight"> Beispiel: Es wird erkannt, dass die Klimaanlage
                        übersteuert. Die Einstellungen werden optimiert, um unnötigen Energieverbrauch zu reduzieren.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Section -->
    <section class="py-5" id="partner">
        <div class="container">
            <div class="wow fadeIn">
                <h2 class="text-center h1 my-4">Unsere Partner</h2>
                <p class="mb-5 pb-3 lead blue-grey-text text-center custom-font-weight">
                    Mit Unterstützung unserer Partner entwickeln wir innovative Lösungen und erfüllen individuelle
                    Bedürfnisse der Arbeitsplatz-Nutzenden. Diese offenen Kooperationen ohne formelle Verpflichtungen
                    basieren auf dem Austausch von Know-how sowie dem gemeinsamen Ziel, positive Veränderungen in der
                    Arbeitswelt zu bewirken.
                </p>
            </div>
            <div class="row wow fadeInLeft" data-wow-delay=".3s">
                <div class="col-lg-6 col-xl-5 pr-lg-5 pb-5"><img class="img-fluid rounded z-depth-2"
                        src="{{ asset('assets/img/StZH-Logo.jpg') }}" alt="project image" /></div>
                <div class="col-lg-6 col-xl-7 pl-lg-5 pb-4">
                    <div class="row mb-3">
                        <div class="col-1 mr-1"><i class="fa fa-building fa-2x blue-text"></i></div>
                        <div class="col-10">
                            <h5 class="font-weight-bold">Stadt Zürich - Pilotpartner</h5>
                            <p class="blue-grey-text custom-font-weight">
                                Im Sommer 2023 wird myOfficeX in einem neu bezogenen Verwaltungsgebäude der Stadt Zürich
                                eingesetzt. Diess Pilotprojekt ermöglicht es uns, die App in einem echten Büroumfeld zu
                                testen. <br><br> Durch Feedbacksammlung, gezielte Verbesserungen und Bewertung der
                                Ergebnisse streben wir an, den Komfort, das Wohlbefinden und die Produktivität im
                                Bürogebäude zusätzlich zu verbessern.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row pt-5 wow fadeInRight" data-wow-delay=".3s">
                <div class="col-lg-6 col-xl-7 mb-3">
                    <div class="row mb-3">
                        <div class="col-1 mr-1"><i class="fa fa-flask fa-2x indigo-text"></i></div>
                        <div class="col-10">
                            <h5 class="font-weight-bold">ZHAW - Wissenschaftlicher Partner</h5>
                            <p class="blue-grey-text custom-font-weight">
                                Die wissenschaftliche Begleitung durch die Arbeitsplatzmanagement-Gruppe der ZHAW
                                gewährleistet, dass die myOfficeX-App stets auf dem neuesten Stand der Arbeitsplatzforschung
                                und des Facility Managements ist. <br><br> Das ermöglicht es uns, den Arbeitsplatz-Nutzenden
                                ein optimales Arbeitsumfeld zu bieten und gleichzeitig das Facility Management bei der
                                Erhöhung der Energieeffizienz zu unterstützen.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 mb-3"><img class="img-fluid rounded z-depth-2"
                        src="{{ asset('assets/img/ZHAW-Logo.jpg') }}" alt="project image" /></div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" style="">
        <div class="rgba-black-strong py-5">
            <div class="container">
                <div class="wow fadeIn">
                    <h2 class="h1 text-white pt-5 pb-3 text-center">Kontakt</h2>
                    <p class="text-white mb-5 pb-3 lead text-center">
                        Wir freuen uns über dein Interesse! Bitte hinterlasse uns deine Kontaktdaten und eine kurze
                        Nachricht. Wir melden uns so schnell wie möglich bei dir zurück.
                    </p>
                </div>

                <div class="row justify-content-center">
                    <div class="card col-10 col-md-8 py-md-3">
                        <div class="card-body px-4">
                            <div class="row">
                                <div class="col-md-6 px-md-5">
                                    <form action="https://formspree.io/f/xdovqjnd" method="POST">
                                        <div class="md-form">
                                            <input class="form-control" id="name" type="text" name="name"
                                                required="required" />
                                            <label for="name">Dein Name</label>
                                        </div>
                                        <div class="md-form">
                                            <input class="form-control" id="email" type="text"
                                                name="_replyto" required="required" />
                                            <label for="email">Deine Email</label>
                                        </div>
                                        <div class="md-form">
                                            <input class="form-control" id="subject" type="text" name="subject"
                                                required="required" />
                                            <label for="subject">Betreff</label>
                                        </div>
                                        <div class="md-form">
                                            <label for="message" class="form-label">Deine Nachricht</label>
                                            <textarea class="md-textarea" id="message" name="message" required="required" style="width: 100%;"></textarea>
                                        </div>
                                        <div class="text-center text-md-start">
                                            <button class="btn btn-indigo m-0 mt-3 ml-0" type="submit"
                                            style="color:rgb(255, 255, 255)"><i class="fa fa-paper-plane-o mr-2"></i>
                                            Senden</button>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="col-md-6 my-3 my-md-5{{--  d-none d-md-block --}}">
                                    <div class="text-center pt-3">
                                       <div>
                                        <i class="fa fa-map-marker indigo-text fa-2x"></i>
                                       </div>
                                       <div>
                                        <p class="mt-2 text-center">Dufoustrasse 50<br>8008 Zürich</p>
                                       </div>      
                                    </div>
                                   {{--  <div class="text-center mt-4">
                                        <div>
                                            <i class="fa fa-phone indigo-text fa-2x"></i>
                                        </div>
                                        <div>
                                            <p class="mt-2">079 947 10 17</p>
                                        </div>
                                    </div> --}}
                                    <div class="text-center mt-4 pt-3">
                                        <div>
                                            <i class="fa fa-envelope indigo-text fa-2x"></i>
                                        </div>
                                        <div>
                                            <p class="mt-2 text-center">contact@myofficex.ch</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                
            </div>
        </div>
        {{--         <div class="arrow-circle">
            <a class="arrow-link" href="#intro">
                <i class="fa fa-arrow-up"></i>
            </a>
        </div> --}}
    </section>


    {{-- <div class="scroll-buttons">
  <div class="scroll-button" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
    <i class="fa fa-arrow-up"></i>
  </div>
  <div class="scroll-button" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' })">
    <i class="fa fa-arrow-down"></i>
  </div>
</div> --}}



@endsection
