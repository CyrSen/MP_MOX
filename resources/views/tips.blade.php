@extends('layouts.master')

@section('title', 'myOfficeX')

@section('content')

    <section id="info">
        <div class="rgba-black-strong"></div>
        <div class="container py-5">
            <div class="wow fadeIn">
                <h2 class="h1 text-white pt-5 pb-3 text-center">Tipps</h2>
                <p class="text-white pb-0 mb-2 pb-3 lead text-center">
                    Hier sind einige sofort umsetzbare Tipps, mit denen du dein Komfort verbessern kannst!
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 mb-5 animate__animated animate__fadeInLeft animate__delay-1s">
                    <div class="card transparent">
                        <div class="row">
                            <div class="col-md-4 d-flex align-items-center justify-content-end left-container{{--  animate__animated animate__shakeX animate__delay-4s --}}">
                                <div class="img-containercold">
                                    <img class="img-fluid rounded mb-3 emoji-tips"
                                      src="{{ asset('assets/img/icons_var/emoji_toocold_soft2.png') }}"
                                      alt="Emoji suffering from cold"
                                      style="max-width: 100px;">
                                  </div>                         
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="h4 text-white">Zu kalt?</div>
                                    <h6 class="font-weight-medium text-white mb-4">Du möchtest nicht mehr frieren? Hier sind
                                        einige Tipps:</h6>
                                    <button class="btn btn-indigo text-white btn-rounded" type="button"
                                        onclick="openPopup('popup-kalt')">Tipps Kälte</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-5 animate__animated animate__fadeInRight animate__delay-1s">
                    <div class="card transparent">
                        <div class="row">
                            <div class="col-md-4 d-flex align-items-center justify-content-end left-container">
                                <div class="img-containerhot">
                                    <img class="img-fluid rounded mb-3 emoji-tips"
                                    src="{{ asset('assets/img/icons_var/emoji_toohot_soft2.png') }}"
                                    alt="Emoji suffering from heat" style="max-width: 100px;">
                                </div>
                                
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="h4 text-white">Zu heiss?</div>
                                    <h6 class="font-weight-medium text-white mb-4">Ist dir im Büro zu warm? Dann lies diese
                                        Tipps:</h6>
                                    <button class="btn btn-indigo text-white btn-rounded" type="button"
                                        onclick="openPopup('popup-heiss')">Tipps Hitze</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-5 animate__animated animate__fadeInLeft animate__delay-1s">
                    <div class="card transparent">
                        <div class="row">
                            <div class="col-md-4 loudCol d-flex align-items-center justify-content-end left-container">
                                <div class="img-containerloud">
                                    <img class="img-fluid rounded mb-3 emoji-tipsLoud"
                                    src="{{ asset('assets/img/icons_var/emoji_noise_soft.png') }}"
                                    alt="Emoji suffering from noise" style="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="h4 text-white">Zu laut?</div>
                                    <h6 class="font-weight-medium text-white mb-4">Möchtest du weniger Lärmbelastung? Lies
                                        diese Tipps:</h6>
                                    <button class="btn btn-indigo text-white btn-rounded" type="button"
                                        onclick="openPopup('popup-laerm')">Tipps Lärm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-5 animate__animated animate__fadeInRight animate__delay-1s">
                    <div class="card transparent">
                        <div class="row">
                            <div class="col-md-4 d-flex align-items-center justify-content-end left-container">
                                <img class="img-fluid rounded mb-3 emoji-tips"
                                    src="{{ asset('assets/img/icons_var/emoji_stinks_soft2.png') }}"
                                    alt="Emoji suffering from bad air" style="max-width: 100px;padding:.3rem">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="h4 text-white">Schlechte Luft?</div>
                                    <h6 class="font-weight-medium text-white mb-4">Dicke Luft im Office? Diese Tipps können
                                        helfen:</h6>
                                    <button class="btn btn-indigo text-white btn-rounded" type="button"
                                        onclick="openPopup('popup-luft')">Tipps Luft</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!------------ OPTIONAL STORE COMENTARY / THANK YOU REPEAT SURVEY  ON TIPS PAGE PLEASE NOT DELETE--------------------------------------START-->
            {{-- <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5 mt-0 mb-3 my-4 text-center">
        <h3 class="text-white">Danke <strong>{{ Auth::user()->name }}</strong> für deine Teilnahme an dieser Umfrage.</h3>
        <div>
          <a class="btn btn-lg btn-indigo text-white" href="{{ url('/danke') }}">Umfrage Schliessen</a>
        </div>
      </div> --}}
            
            {{-- <div class="col-md-6 col-lg-5 mb-3 my-4">
                      <h5 class="display"></h5>
                      <p class="lead">Commentary:</p>
              
                          <form action="{{ route('feedback.storeCommentary', ['feedbackMapId' => $feedbackMapId]) }}" method="POST">

                                @csrf
                            <div class="mb-3">
                                <div class="input-group">
                                <span class="input-group-text"><i class="fa-regular fa-comment-dots"></i></span>
                                <textarea  type="text" name="commentary" class="form-control" aria-label="With textarea" placeholder="Commentary"></textarea>
                                </div>
                            </div>

                            <div class="text-end pe-2 pt-2 pb-3">
                              <button type="submit" class="btn btn-primary">Button</button>
                            </div>
                            
                        </form> 
                    </div> --}}
            <!------------ OPTIONAL STORE COMENTARY FORM ON TIPS PAGE PLEASE NOT DELETE--------------------------------------END-->
            {{-- </div> --}}
        </div>
    </section>


        <!--Popup Kalt-->
        <div id="popup-kalt" class="modal shadow">
            <div class="modal-dialog modal-dialog-centered popup-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-indigo text-white">
                        <h5 class="modal-title">Tipps gegen Frieren im Büro</h5>
                        {{-- <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> --}}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li>
                                <h6>Kleidung</h6>
                                <ul>
                                    <li>Trage mehrere Kleidungsschichten aus natürlichen Materialien wie Wolle oder Kaschmir.
                                    </li>
                                    <li>Benutze Handwärmer und wärmende Einlegesohlen.</li>
                                    <li>Ergänze deine Kleidung mit wärmenden Accessoires wie Schals und warmen Socken.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Essen und Trinken</h6>
                                <ul>
                                    <li>Geniesse warme Getränke wie Tee oder Kaffee.</li>
                                    <li>Gönn dir warme Snacks oder Suppen.</li>
                                    <li>Iss warme Mahlzeiten in der Mittagspause.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Aktive Haltung</h6>
                                <ul>
                                    <li>Sitz aufrecht und aktiv, um dich wärmer zu fühlen.</li>
                                    <li>Achte auf eine ergonomische Sitzposition.</li>
                                    <li>Arbeite stehend, indem du die Höhe deines Schreibtisches anpasst.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Bewegung</h6>
                                <ul>
                                    <li>Nutze die Treppe anstatt des Lifts.</li>
                                    <li>Steh regelmässig auf und mach kurze Bewegungspausen.</li>
                                    <li>Bewege deine Finger zu Zehen, um sie warm zu halten.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Fensterlüftung</h6>
                                <ul>
                                    <li>Stelle sicher, dass die Fenster gut geschlossen sind und keine kalte Luft hineinströmt.
                                    </li>
                                    <li>Lüfte nur kurz, um frische Luft hereinzulassen, ohne den Raum auszukühlen.</li>
                                    <li>Sprich mit deinen Kolleginnen und Kollegen über Regelungen zur Fensterlüftung.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Positionierung im Büro</h6>
                                <ul>
                                    <li>Wechsle, wenn möglich, näher an die Heizung.</li>
                                    <li>Suche einen wärmeren Bereich im Büro, falls vorhanden.</li>
                                    <li>Setze dich in die Nähe von Fenstern, um von den Sonnenstrahlen gewärmt zu werden.</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-indigo text-white" data-bs-dismiss="modal">Schliessen</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Popup Heiss-->
        <div id="popup-heiss" class="modal shadow">
            <div class="modal-dialog modal-dialog-centered popup-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-indigo text-white">
                        <h5 class="modal-title">Tipps bei Hitze im Büro</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li>
                                <h6>Kleidung</h6>
                                <ul>
                                    <li>Trage leichte, atmungsaktive Kleidung, um dich kühl zu halten.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Essen und Trinken</h6>
                                <ul>
                                    <li>Trinke ausreichend Wasser und kühle Getränke, um hydratisiert zu bleiben.</li>
                                    <li>Vermeide koffeinhaltige Getränke, da sie dehydrierend wirken können.</li>
                                    <li>Geniesse kühlende Snacks wie frisches Obst oder Joghurt.</li>
                                    <li>Wähle leichtere Mahlzeiten, um die Verdauung zu erleichtern und eine zusätzliche
                                        Hitzeentwicklung zu vermeiden.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Lüften</h6>
                                <ul>
                                    <li>Öffne Fenster und Türen in den kühleren Morgen- oder Abendstunden für frische Luft.</li>
                                    <li>Falls tagsüber Fensterlüftung erforderlich ist, öffne ein sonnenabgewandtes Fenster, wo
                                        die Aussenluft kühler ist.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Positionierung im Büro</h6>
                                <ul>
                                    <li>Vermeide direkte Sonneneinstrahlung.</li>
                                    <li>Arbeite, wenn möglich, an einem kühleren Ort wie einem klimatisierten Raum oder einem
                                        schattigen Aussenbereich.</li>
                                    <li>Schliesse Storen, um das Eindringen von Sonnenwärme zu reduzieren.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Elektronische Geräte</h6>
                                <ul>
                                    <li>Reduziere die Verwendung von elektronischen Geräten, da sie Wärme abgeben.</li>
                                    <li>Vermeide das Sitzen in der Nähe von Computern, Druckern oder anderen elektronischen
                                        Geräten, um zusätzliche Wärmeentwicklung zu vermeiden.</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-indigo text-white" data-bs-dismiss="modal">Schliessen</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Popup Lärm-->
        <div id="popup-laerm" class="modal shadow">
            <div class="modal-dialog modal-dialog-centered popup-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-indigo text-white">
                        <h5 class="modal-title">Tipps gegen Lärm im Büro</h5>
                        {{-- <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> --}}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li>
                                <h6>Vereinbarungen</h6>
                                <ul>
                                    <li>Arbeite gemeinsam an Lärmschutzmassnahmen: Nutze ruhige Kommunikationsmittel und
                                        vereinbare Ruhezeiten mit deinen Kollegen.</li>
                                    <li>Stimme dich ab: Kommuniziere mit den Kolleginnen und Kollegen, um gemeinsame Lösungen
                                        für Lärmprobleme zu finden.</li>
                                    <li>Lege klare Kommunikationsregeln fest: Versuche mit deinen Kolleginnen und Kollegen klare
                                        Regeln zu finden um den Störung im Büro zu reduzieren, die für alle passen.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Lärmfreie Zonen</h6>
                                <ul>
                                    <li>Nutze abgeschirmte Telefonkabinen: Führe ungestörte Telefongespräche in abgeschirmten
                                        Telefonkabinen oder Fokusräumen.</li>
                                    <li>Nutze lärmfreie Zonen: Gehe in spezielle Fokusräume im Büro, in denen du konzentriert
                                        arbeiten kannst, ohne gestört zu werden.</li>
                                    <li>Bilde lärmfokussierte Arbeitseinheiten: Arbeite in kleinen Gruppen zusammen, die an
                                        ähnlich lauten Aufgaben arbeiten, um Lärmströrungen zu reduzieren.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Lärmfreie Zeiten</h6>
                                <ul>
                                    <li>Führe lärmbefreite Zeiten ein: Schaffe im Büro Zeiten, in denen laute Gespräche oder
                                        Telefonate vermieden werden sollten, um eine ruhigere Arbeitsumgebung zu gewährleisten.
                                    </li>
                                    <li>Nutze lärmfreie Zeiten: Plane deine anspruchsvollsten Aufgaben oder konzentrierte Arbeit
                                        in Zeiten mit niedrigem Lärmpegel, wie früh am Morgen, nach Feierabend oder anderen
                                        lärmbefreiten Zeiten.</li>
                                </ul>
                            </li>
                            <br>
                            <p>Wenn alles nichts nützt: Verwende geräuschunterdrückende Kopfhörer oder höre beruhigende Musik,
                                um den Lärm zu überdecken.</p>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-indigo text-white" data-bs-dismiss="modal">Schliessen</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Popup Luft-->
        <div id="popup-luft" class="modal shadow">
            <div class="modal-dialog modal-dialog-centered popup-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-indigo text-white">
                        <h5 class="modal-title">Tipps für gute Luft im Büro</h5>
                        {{-- <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> --}}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li>
                                <h6>Essen und Trinken</h6>
                                <ul>
                                    <li>Schliesse die Tür zur Küche: Falls du stark riechende Gerichte zubereitest oder
                                        aufwärmst, schliesse die Tür zur Küche, um Gerüche im Raum zu halten.</li>
                                    <li>Iss riechende Lebensmittel wie Zwiebeln, Knoblauch oder Fisch in der Küche oder einem
                                        geschlossenen Raum mit guter Belüftung oder Fenster.</li>
                                    <li>Entsorge Abfall richtig: Entsorge Essensreste und Verpackungen ordnungsgemäss, um
                                        Gerüche und Schädlingsbefall zu vermeiden.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h6>Fensterlüftung</h6>
                                <ul>
                                    <li>Lüfte regelmässig: Öffne bei Bedarf die Fenster, um frische Luft hereinzulassen und
                                        verbrauchte Luft abzuführen.</li>
                                    <li>Nutze natürliche Lüftung: Wenn möglich, nutze natürliche Lüftungsmöglichkeiten wie
                                        Fenster und Türen.</li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                FORM                       <h6>Elektronische Geräte</h6>
                                <ul>
                                    <li>Schalte Elektronik aus: Schalte elektronische Geräte wie Drucker oder Kopierer aus, wenn
                                        sie nicht in Gebrauch sind, um den Ausstoss von flüchtigen organischen Verbindungen
                                        (VOCs) zu reduzieren.</li>
                                    <li>Platziere elektronische Geräte richtig: Stelle sicher, dass deine elektronischen Geräte
                                        ausreichend belüftet sind und nicht zu nah an deinem Arbeitsplatz stehen.</li>
                                </ul>
                            </li>
                            <br>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-indigo text-white" data-bs-dismiss="modal">Schliessen</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
    
    
    
    
    
