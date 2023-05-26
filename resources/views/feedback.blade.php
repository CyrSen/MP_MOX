@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')

<!-- Feedback -->

<section id="feedback">
    <div class="rgba-black-strong"></div>
    <div class="container py-5">
      <div class="wow fadeIn">
        <h2 class="h1 text-white pt-5 pb-3 text-center">Feedback</h2>
        <p class="text-white px-5 mb-5 pb-3 lead text-center">
          Wähle zuerst deine Bürozone aus. Teile uns dann dein aktuelles Komforterlebnis mit. Wenn du möchtest, schreib auch gerne eine Nachricht. Vergiss nicht, deinen Namen anzugeben, wenn du eine Rückmeldung wünschst.
        </p>
      </div>

      <!-- FORM START-->
      <form action="{{ route('feedback.store', ['feedbackMapId' => $feedbackMapId]) }}" method="POST">
        @csrf
      <div class="row justify-content-center">
        <div class="col-md-6 mb-5 wow fadeInLeft" data-wow-delay=".4s">
          <div class="card mx-auto h-100" style="background-color: rgba(233, 228, 224, 0.8);">
            <div class="card-body p-5">
              <!-- Content of Card 1 -->
              {{-- <form id="fs-frm" name="survey-form" accept-charset="utf-8" action="https://formspree.io/f/{form_id}" method="post">
                <fieldset id="fs-frm-inputs"> --}}
                  <div class="form-group">
                    <label class="mb-2" for="full-name">Schritt 1: Wähle die Bürozone aus, für die du Feedback geben möchtest, indem du sie im Grundriss anklickst.</label>
                  </div>
  
                  <div class="form-group">
                    <label for="timely">Schritt 2: Wärme-Behaglichkeit angeben.</label>
                    <div class="emoji-selection mt-2 mb-2" style="background-color: rgba(233, 228, 224, 0.8); width: 100%; padding: 6px; border-radius: 4px; display: flex; justify-content: space-between;">
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Viel zu kalt" data-bs-value="1" onclick="setTempLevel(1)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Zu kalt" data-bs-value="2" onclick="setTempLevel(2)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Gerade richtig" data-bs-value="3" onclick="setTempLevel(3)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Zu warm" data-bs-value="4" onclick="setTempLevel(4)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_normal.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Viel zu warm" data-bs-value="5" onclick="setTempLevel(5)">
                      </div>
                    </div>
                    <input type="hidden" name="temperature_level" id="temperature-level-input">
                  </div>
                  
                  
                  
                  
                  
                  <div class="form-group">
                    <label for="timely">Schritt 3: Akustische Behaglichkeit angeben.</label>
                    <div class="emoji-selection mt-2 mb-2" style="background-color: rgba(233, 228, 224, 0.8); width: 100%; padding: 6px; border-radius: 4px; display: flex; justify-content: space-between;">
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Viel zu leise" data-bs-value="1" onclick="setNoiseLevel(1)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Zu leise" data-bs-value="2" onclick="setNoiseLevel(2)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Gerade richtig" data-bs-value="3" onclick="setNoiseLevel(3)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Zu laut" data-bs-value="4" onclick="setNoiseLevel(4)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_normal.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Viel zu laut" data-bs-value="5" onclick="setNoiseLevel(5)">
                      </div>
                    </div>
                    <input type="hidden" name="noise_level" id="noise-level-input">
                  </div>
  
  
  
  
                  <div class="form-group">
                    <label for="timely">Schritt 4: Luft-Behaglichkeit angeben.</label>
                    <div class="emoji-selection mt-2 mb-2" style="background-color: rgba(233, 228, 224, 0.8); width: 100%; padding: 6px; border-radius: 4px; display: flex; justify-content: space-between;">
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Ausgezeichnete Luftqualität" data-bs-value="1" onclick="setAirQLevel(1)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Gute Luftqualität" data-bs-value="2" onclick="setAirQLevel(2)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Akzeptable Luftqualität" data-bs-value="3" onclick="setAirQLevel(3)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Mässige Luftqualität" data-bs-value="4" onclick="setAirQLevel(4)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_mask.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Schlechte Luftqualität - Stinkt übelst - hazardous!!!" data-bs-value="5" onclick="setAirQLevel(5)">
                      </div>
                    </div>
                    <input type="hidden" name="air_quality_level" id="air-quality-level-input">
                  </div>
  
  
                  <div class="form-group">
                    <label for="timely">Schritt 5: Gesamt-Behaglichkeit Behaglichkeit angeben.</label>
                    <div class="emoji-selection mt-2 mb-2" style="background-color: rgba(233, 228, 224, 0.8); width: 100%; padding: 6px; border-radius: 4px; display: flex; justify-content: space-between;">
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Exzellenter Komfort" data-bs-value="1" onclick="setHiggeLevel(1)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Guter Komfort" data-bs-value="2" onclick="setHiggeLevel(2)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Akzeptabler Komfort" data-bs-value="3" onclick="setHiggeLevel(3)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Mässiger Komfort" data-bs-value="4" onclick="setHiggeLevel(4)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_normal.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Kein Komfort" data-bs-value="5" onclick="setHiggeLevel(5)">
                      </div>
                    </div>
                    <input type="hidden" name="higge_level" id="higge-level-input">
                  </div>
  
                  <div class="form-group">
                    <label for="message">Schritt 6: Nachricht senden (optional).</label>
                    <textarea rows="3" name="commentary" id="message" class="form-control mt-2" placeholder="Deine Mitteilung"{{--  required="" --}}></textarea>
                    @error('commentary')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror   
                  </div>
                  {{-- <input type="hidden" name="_subject" id="email-subject" value="Survey Responses"> --}}
                  <div class="text-center mt-5">
                    <button class="btn btn-primary p-3" type="submit"><i class="fa fa-paper-plane-o mr-2"></i> Senden</button>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-5 wow fadeInRight" data-wow-delay=".4s">
          <div class="card mx-auto h-100" style="background-color: rgba(233, 228, 224, 0.8);">
            <div class="card-body p-5 d-flex flex-column justify-content-center align-items-center">
              <!-- Content of Card 2 -->

            <div id="image-container" class="map-container">
                <img class="img-fluid myMapImg" id="image" src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg')}}" alt="Office room plan">
              <input id="x-coordinates" type="hidden" name="x_coordinates">
              <input id="y-coordinates" type="hidden" name="y_coordinates">
            </div>


          </form>
            <!-- FORM END-->
            <!--ADMIN USE -->
            <div class="col-sm-3" style="display:none;">
              <p id="x-display"></p>
              <p id="y-display"></p>
            </div>

            </div>
          </div>
        </div>
      </div>
    </section>


 


    @endsection