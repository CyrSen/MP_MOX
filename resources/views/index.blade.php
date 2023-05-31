@extends('layouts.master')

@section('title', 'myOfficeX')

@section('content')

     <!-- Intro Section -->
     <section class="view hm-gradient" id="intro">
        <div class="site-bg-img d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-lg-6 text-center">
                <div class="white-text">
                  <div class="wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="h1-responsive font-weight-bold mt-sm-5">Unser Ziel: Dein Komfort</h1>
                    <div class="h6 p-3 text-start text-md-center">
                    Du hast genug von Lärm, unangenehmen Temperaturen und anderen Bürostörungen? Mit myOfficeX kannst du anonym Feedback zu deinem Arbeitsplatzkomfort geben. Unsere App nutzt dieses Feedback, um kontinuierliche Verbesserungen umzusetzen. Dein Büro verwandelt sich in einen Ort, an dem du dich wohlfühlst und optimal arbeiten kannst.
                    </div>
                </div>
                </div><br>
                                @guest
                                    {{-- <h3 class="lead text-white"><strong>Einloggen und an der Umfrage teilnehmen</strong></h3> --}}
                                        <a class="btn  btnOwnTitle btn-outline-light" href="{{ route('login') }}">{{ __('Einloggen und an der Umfrage teilnehmen') }}</a>  
                                @endguest
                    
                                    @auth
                                    <div class="text-center pt-3">
                                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/feedback') }}">
                                        <button class="btn btn-lg btn-primary">
                                            Umfrage Wiederholen
                                        </button>
                                    </a>
                                    </div>
                                @endauth

                                <div class=" mt-3">
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
                                </div>
                            
                    <div class="wow fadeInLeft" data-wow-delay="0.3s">
                        <a class="btn btn-white dark-grey-text font-weight-bold ml-0" href="#contact" target="_blank">
                            <i class="fa fa-play mr-1"></i> Demo buchen</a><a class="btn btn-outline-white" href=white-paper.pdf>White Paper</a>
                        </div>
                    </div>
                 {{--                <div class="col-lg-6 m-3 mx-auto mt-5 bg-warning p-3">
                                    <h2 class="lead mb-5">OFFICEX Feedback-Form</h2>
                                @guest
                                    <h4 class="lead">Login or Register To start Survey!</h4>  
                                @endguest
                    
                                    @auth
                                    <div class="text-center pt-3">
                                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/feedback') }}">
                                        <button class="btn btn-lg btn-primary">
                                            Umfrage Wiederholen
                                        </button>
                                    </a>
                                    </div>
                                @endauth
                                    <div class="text-center mt-3">
                                    <ul class="navbar-nav me-auto">
                                        @if (Route::has('login'))
                                        @auth
                                        <li class="nav-item">
                                            <a href="{{ url('/  ') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                        </li>            
                                        @else
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                        </li>
                                        @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                        </li>
                                        @endif
                                        @endauth
                                        @endif
                                    </ul>
                                </div>
                            </div> --}}
              </div>
              
            </div>
          </div>

          
      </section>
    </header>
<!-- Nutzen Section -->
<section class="text-center py-5 grey lighten-4" id="nutzen">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3">Welchen Nutzen hat myOfficeX für dich?</h2>
      <p class="px-5 mb-5 pb-3 lead blue-grey-text">
        Die myOfficeX-App ermöglicht es dir, anonym Feedback zu deinem Arbeitsplatzkomfort zu geben. Das Feedback und Informationen über das Gebäude werden genutzt, um verschiedene Verbesserungen zu ermöglichen:
      </p>
    </div>
    <div class="row">
      <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".3s"><i class="fa fa-dashboard fa-3x orange-text"></i>
        <h3 class="h4 mt-3">Individualkomfort</h3>
        <p class="mt-3 blue-grey-text">
          Basierend auf deinem Feedback erhältst du massgeschneiderte Empfehlungen zur Verbesserung deines Arbeitsplatzkomforts.  <br><br> Beispiel: Die App schlägt dir eine wärmere Bürozone auf der Südseite des Gebäudes vor, wenn dir kalt ist.
        </p>
      </div>
      <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-comments-o fa-3x cyan-text"></i>
        <h3 class="h4 mt-3">Gesamtkomfort</h3>
        <p class="mt-3 blue-grey-text">
          Durch Zusammenführung aller Feedbacks erkennt das Management, wenn es ein breiteres Problem mit dem Arbeitsplatzkomfort gibt<br><br> Beispiel: Viele Mitarbeitende geben an, dass sie frieren. Das Management ergreift Massnahmen für eine angenehmere Raumtemperatur für alle.
        </p>
      </div>
      <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-cubes fa-3x red-text"></i>
        <h3 class="h4 mt-3">Energieeffizienz</h3>
        <p class="mt-3 blue-grey-text">
          Durch Abgleich von Feedback- und Gebäudedaten werden Potenziale zur Verbesserung der Energieeffizienz aufgedeckt. <br><br> Beispiel: Es wird erkannt, dass die Klimaanlage zu hoch eingestellt ist. Die Einstellungen werden optimiert, unnötiger Energieverbrauch reduziert.
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
      <p class="px-5 mb-5 pb-3 lead blue-grey-text text-center">
        Mit Unterstützung unserer Partner entwickeln wir innovative Lösungen und erfüllen individuelle Bedürfnisse der Arbeitsplatz-Nutzenden. Diese offenen Kooperationen ohne formelle Verpflichtungen basieren auf dem Austausch von Know-how sowie dem gemeinsamen Ziel, positive Veränderungen in der Arbeitswelt zu bewirken.
      </p>
    </div>
    <div class="row wow fadeInLeft" data-wow-delay=".3s">
      <div class="col-lg-6 col-xl-5 pr-lg-5 pb-5"><img class="img-fluid rounded z-depth-2" src="img/StZH-Logo.jpg" alt="project image"/></div>
      <div class="col-lg-6 col-xl-7 pl-lg-5 pb-4">
        <div class="row mb-3">
          <div class="col-1 mr-1"><i class="fa fa-book fa-2x cyan-text"></i></div>
          <div class="col-10">
            <h5 class="font-weight-bold">Stadt Zürich - Pilotpartner</h5>
            <p class="blue-grey-text">
              Im Sommer 2023 wird myOfficeX in einem neu bezogenen Verwaltungsgebäude der Stadt Zürich eingesetzt. Diess Pilotprojekt ermöglicht es uns, die App in einem echten Büroumfeld zu testen. <br><br> Durch Feedbacksammlung, gezielte Verbesserungen und Bewertung der Ergebnisse streben wir an, den Komfort, das Wohlbefinden und die Produktivität im Bürogebäude zusätzlich zu verbessern.
            </p>
          </div>
        </div>
      </div>
    </div>
    <hr/>
    <div class="row pt-5 wow fadeInRight" data-wow-delay=".3s">
      <div class="col-lg-6 col-xl-7 mb-3">
        <div class="row mb-3">
          <div class="col-1 mr-1"><i class="fa fa-bar-chart fa-2x indigo-text"></i></div>
          <div class="col-10">
            <h5 class="font-weight-bold">ZHAW - Wissenschaftlicher Partner</h5>
            <p class="blue-grey-text">
              Die wissenschaftliche Begleitung durch die Arbeitsplatzmanagement-Gruppe der ZHAW gewährleistet, dass die myOfficeX-App stets auf dem neuesten Stand der Arbeitsplatzforschung und des Facility Managements ist. <br><br> Das ermöglicht es uns, den Arbeitsplatz-Nutzenden ein optimales Arbeitsumfeld zu bieten und gleichzeitig das Facility Management bei der Erhöhung der Energieeffizienz zu unterstützen.
            </p>
          </div>
        </div>        
      </div>
      <div class="col-lg-6 col-xl-5 mb-3"><img class="img-fluid rounded z-depth-2" src="img/ZHAW-Logo.jpg" alt="project image"/></div>
    </div>
  </div>
</section>


<section id="contact" style="background-image:url('img/panorama-3094696_1920.jpg')">
  <div class="rgba-black-strong py-5">
    <div class="container">
      <div class="wow fadeIn">
        <h2 class="h1 text-white pt-5 pb-3 text-center">Kontakt</h2>
        <p class="text-white px-5 mb-5 pb-3 lead text-center">
          Wir freuen uns über dein Interesse! Bitte hinterlasse uns deine Kontaktdaten und eine kurze Nachricht. Wir melden uns so schnell wie möglich bei dir zurück.
        </p>
      </div>
      <div class="card mb-5 wow fadeInUp" data-wow-delay=".4s">
        <div class="card-body p-5">
          <div class="row">
            <div class="col-md-8">
              <form action="https://formspree.io/youremail@example.com" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="name" type="text" name="name" required="required"/>
                      <label for="name">Dein Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="email" type="text" name="_replyto" required="required"/>
                      <label for="email">Deine Email</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form">
                      <input class="form-control" id="subject" type="text" name="subject" required="required"/>
                      <label for="subject">Betreff</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="md-form">
                      <textarea class="md-textarea" id="message" name="message" required="required"></textarea>
                      <label for="message">Deine Nachricht</label>
                    </div>
                  </div>
                </div>
                <div class="center-on-small-only mb-4">
                  <button class="btn btn-indigo ml-0" type="submit"><i class="fa fa-paper-plane-o mr-2"></i> Senden</button>
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <ul class="list-unstyled text-center">
                <li class="mt-4"><i class="fa fa-map-marker indigo-text fa-2x"></i>
                  <p class="mt-2">Dufoustrasse 49, 8008 Zürich</p>
                </li>
                <li class="mt-4"><i class="fa fa-phone indigo-text fa-2x"></i>
                  <p class="mt-2">079 947 10 17</p>
                </li>
                <li class="mt-4"><i class="fa fa-envelope indigo-text fa-2x"></i>
                  <p class="mt-2">contact@myofficex.com</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection