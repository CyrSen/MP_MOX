@extends('layouts.master')

@section('title', 'myOfficeX')

@section('content')

<section id="tips">
  <div class="rgba-black-strong"></div>
  <div class="container py-5">
    <div class="wow fadeIn">
      <h2 class="h1 text-white pt-5 pb-3 text-center">Tipps</h2>
      <p class="text-white px-5 mb-5 pb-3 lead text-center">
        Hier sind einige sofort umsetzbare Tipps, mit denen du dein Komforterlebnis selbst verbessern kannst!
      </p>
    </div>
    <div class="row mb-lg-4 center-on-small-only">
      <div class="col-lg-6 col-md-12 mb-5 wow fadeInLeft" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img src="{{ asset('assets/img/icons_var/smiley_green_successreal_great.svg') }}" alt="worried emoji"/></div>
        <div class="col-md-6 float-right">
          <div class="h4 text-white ">Zu kalt?</div>
          <p class="text-white ">Du möchtest nicht mehr frieren? Hier sind einige Tipps, die dir vielleicht helfen können:</p>
          <button class="btn btn-primary btn-rounded my-0" style="width: 200px;" type="button" onclick="openPopup('popup-kalt')">Tipps bei Kälte</button>

        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-5 wow fadeInRight" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded mb-3" src="{{ asset('assets/img/icons_var/smiley_green_successreal_great.svg') }}" alt="worried emoji"/></div>
        <div class="col-md-6 float-right">
          <div class="h4 text-white ">Zu heiss?</div>
          <p class="text-white t">Ist dir im Büro zu warm? Möglicherweise können dir diese Tipps nützlich sein:</p>               
          <button class="btn btn-primary btn-rounded my-0" style="width: 200px;" type="button" onclick="openPopup('popup-heiss')">Tipps bei Hitze</button>

        </div>
      </div>
    </div>
    <div class="row center-on-small-only">
      <div class="col-lg-6 col-md-12 mb-5 wow fadeInLeft" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded mb-3" src="{{ asset('assets/img/icons_var/smiley_green_successreal_great.svg') }}" alt="worried emoji"/></div>
        <div class="col-md-6 float-right">
          <div class="h4 text-white ">Zu laut?</div>
          <p class="text-white ">Möchtest du die Lärmbelastung im Büro reduzieren? Hier sind einige Tipps, die vielleicht helfen:</p>              
          <button class="btn btn-primary btn-rounded my-0" style="width: 200px;" type="button" onclick="openPopup('popup-laerm')">Tipps bei Lärm</button>

        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-5 wow fadeInRight" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded mb-3" src="{{ asset('assets/img/icons_var/smiley_green_successreal_great.svg') }}" alt="worried emoji"/></div>
        <div class="col-md-6 float-right">
          <div class="h4 text-white ">Schlechte Luft?</div>
          <p class="text-white ">Dicke Luft im Office? Hier einige Tipps, die helfen können, die Situation zu verbessern: </p>              
          <button class="btn btn-primary btn-rounded my-0" style="width: 200px;" type="button" onclick="openPopup('popup-luft')">Tipps für gute Luft</button>

        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5 mb-3 my-4 text-center">
        <h5 class="display">{{-- Card 3 --}}</h5>
        <p class="lead">Danke <strong>{{ Auth::user()->name }}</strong> für deine Teilnahme an dieser Umfrage.</p>
        <div>
          <h5 class="display"></h5>
          
          <a class="btn btn-lg btn-primary" href="{{ url('/danke') }}">Umfrage Schliessen</a>
        </div>
      </div>
  </div>
</div>
</section>

<!--Popup Kalt-->
<div id="popup-kalt" class="modal shadow">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header bg-primary text-white">
  <h5 class="modal-title">Tipps gegen Frieren im Büro</h5>
  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <ol>
    <li>
      <h6>Kleidung</h6>
      <ul>
        <li>Trage mehrere Kleidungsschichten aus natürlichen Materialien wie Wolle oder Kaschmir.</li>
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
        <li>Stelle sicher, dass die Fenster gut geschlossen sind und keine kalte Luft hineinströmt.</li>
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
  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Schliessen</button>

</div>      
</div>
</div>
</div>

<!--Popup Heiss-->
<div id="popup-heiss" class="modal shadow">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header bg-primary text-white">
  <h5 class="modal-title">Tipps bei Hitze im Büro</h5>
  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
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
        <li>Wähle leichtere Mahlzeiten, um die Verdauung zu erleichtern und eine zusätzliche Hitzeentwicklung zu vermeiden.</li>
      </ul>
    </li>
    <br>
    <li>
      <h6>Lüften</h6>
      <ul>
        <li>Öffne Fenster und Türen in den kühleren Morgen- oder Abendstunden für frische Luft.</li>
        <li>Falls tagsüber Fensterlüftung erforderlich ist, öffne ein sonnenabgewandtes Fenster, wo die Aussenluft kühler ist.</li>
      </ul>
    </li>
    <br>
    <li>
      <h6>Positionierung im Büro</h6>
      <ul>
        <li>Vermeide direkte Sonneneinstrahlung.</li>
        <li>Arbeite, wenn möglich, an einem kühleren Ort wie einem klimatisierten Raum oder einem schattigen Aussenbereich.</li>
        <li>Schliesse Storen, um das Eindringen von Sonnenwärme zu reduzieren.</li>
      </ul>
    </li>
    <br>
    <li>
      <h6>Elektronische Geräte</h6>
      <ul>
        <li>Reduziere die Verwendung von elektronischen Geräten, da sie Wärme abgeben.</li>
        <li>Vermeide das Sitzen in der Nähe von Computern, Druckern oder anderen elektronischen Geräten, um zusätzliche Wärmeentwicklung zu vermeiden.</li>
      </ul>
    </li>
  </ol>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Schliessen</button>
</div>      
</div>
</div>
</div>

<!--Popup Lärm-->
<div id="popup-laerm" class="modal shadow">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header bg-primary text-white">
  <h5 class="modal-title">Tipps gegen Lärm im Büro</h5>
  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <ol>
      <li>
        <h6>Vereinbarungen</h6>
        <ul>
          <li>Arbeite gemeinsam an Lärmschutzmassnahmen: Nutze ruhige Kommunikationsmittel und vereinbare Ruhezeiten mit deinen Kollegen.</li>
          <li>Stimme dich ab: Kommuniziere mit den Kolleginnen und Kollegen, um gemeinsame Lösungen für Lärmprobleme zu finden.</li>
          <li>Lege klare Kommunikationsregeln fest: Versuche mit deinen Kolleginnen und Kollegen klare Regeln zu finden um den Störung im Büro zu reduzieren, die für alle passen.</li>
        </ul>
      </li>
      <br>
      <li>
        <h6>Lärmfreie Zonen</h6>
        <ul>
          <li>Nutze abgeschirmte Telefonkabinen: Führe ungestörte Telefongespräche in abgeschirmten Telefonkabinen oder Fokusräumen.</li>
          <li>Nutze lärmfreie Zonen: Gehe in spezielle Fokusräume im Büro, in denen du konzentriert arbeiten kannst, ohne gestört zu werden.</li>
          <li>Bilde lärmfokussierte Arbeitseinheiten: Arbeite in kleinen Gruppen zusammen, die an ähnlich lauten Aufgaben arbeiten, um Lärmströrungen zu reduzieren.</li>
        </ul>
      </li>
      <br>
      <li>
        <h6>Lärmfreie Zeiten</h6>
        <ul>
          <li>Führe lärmbefreite Zeiten ein: Schaffe im Büro Zeiten, in denen laute Gespräche oder Telefonate vermieden werden sollten, um eine ruhigere Arbeitsumgebung zu gewährleisten.</li>
          <li>Nutze lärmfreie Zeiten: Plane deine anspruchsvollsten Aufgaben oder konzentrierte Arbeit in Zeiten mit niedrigem Lärmpegel, wie früh am Morgen, nach Feierabend oder anderen lärmbefreiten Zeiten.</li>
        </ul>
      </li>
    <br><p>Wenn alles nichts nützt: Verwende geräuschunterdrückende Kopfhörer oder höre beruhigende Musik, um den Lärm zu überdecken.</p>
  </ol>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Schliessen</button>
</div>      
</div>
</div>
</div>

<!--Popup Luft-->
<div id="popup-luft" class="modal shadow">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header bg-primary text-white">
  <h5 class="modal-title">Tipps für gute Luft im Büro</h5>
  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <ol>
    <li>
      <h6>Essen und Trinken</h6>
      <ul>
        <li>Schliesse die Tür zur Küche: Falls du stark riechende Gerichte zubereitest oder aufwärmst, schließe die Tür zur Küche, um Gerüche im Raum zu halten.</li>
        <li>Iss riechende Lebensmittel wie Zwiebeln, Knoblauch oder Fisch in der Küche oder einem geschlossenen Raum mit guter Belüftung oder Fenster.</li>
        <li>Entsorge Abfall richtig: Entsorge Essensreste und Verpackungen ordnungsgemäss, um Gerüche und Schädlingsbefall zu vermeiden.</li>
      </ul>
    </li>
    <br>
    <li>
      <h6>Fensterlüftung</h6>
      <ul>
        <li>Lüfte regelmässig: Öffne bei Bedarf die Fenster, um frische Luft hereinzulassen und verbrauchte Luft abzuführen.</li>
        <li>Nutze natürliche Lüftung: Wenn möglich, nutze natürliche Lüftungsmöglichkeiten wie Fenster und Türen.</li>
      </ul>
    </li>
    <br>
    <li>
      <h6>Elektronische Geräte</h6>
      <ul>
        <li>Schalte Elektronik aus: Schalte elektronische Geräte wie Drucker oder Kopierer aus, wenn sie nicht in Gebrauch sind, um den Ausstoss von flüchtigen organischen Verbindungen (VOCs) zu reduzieren.</li>
        <li>Platziere elektronische Geräte richtig: Stelle sicher, dass deine elektronischen Geräte ausreichend belüftet sind und nicht zu nah an deinem Arbeitsplatz stehen.</li>
      </ul>
    </li>
    <br>
  </ol>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Schliessen</button>
</div>      
</div>
</div>
</div>



<script>new WOW().init();</script>

<script>
function openPopup(popupId) {
$('#' + popupId).modal('show');
}
</script>



        
@endsection