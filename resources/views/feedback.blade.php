<!DOCTYPE html>

@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')

<section id="feedback" {{-- style="background-image: url('/assets/img/architecture.jpg');" --}}>
<div class="container px-0 mx-auto">
    <div class="card shadow-2-strong shadow mb-0 bg-body">
        <div class="row justify-content-center m-3 px-1 pt-3">
            <div class="card col-sm-11 my-2 p-3 shadow p-3 bg-body">
                <h3>Hallo {{ Auth::user()->name }}!</h3>
                <p class="h5 my-3"><strong>An dieser Stelle hast du die Möglickkeit für deinen Arbeitsplatz ein Feedback abzugeben:</strong></p>
            </div>
        </div>

    <form action="{{ route('feedback.store', ['feedbackMapId' => $feedbackMapId]) }}" method="POST"> 

        @csrf
        <div class="row justify-content-center ">
            <div class="col-sm-8 order-2 order-md-1 order-sm-first">
                <div class="container-fluid">
                    <div class="row my-2">
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row my-0 p-2">
                                        <div class="col-sm-2 my-3">
                                            <img class="" src="./assets/img/numbers_in_circle/number_one_circle.svg" alt="number_one">
                                        </div>
                                        <div class="col-sm-10 my-3 text-start p-0">
                                            <p class="feedbackQ my-3">Klicke auf dem Grundriss auf die Zone, für die du Feedback geben möchtest.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row my-0 p-2">
                                        <div class="col-sm-2 my-3">
                                            <img class="" src="./assets/img/numbers_in_circle/number_two_circle.svg" alt="number_two">
                                        </div>
                                        <div class="col-sm-2 text-start p-0">
                                            <p class="feedbackQ my-3">Schritt 2: Wärme-Behaglichkeit angeben.</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col justify-content-evenly text-center p-3">

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Alles OK!" data-bs-value="1" onclick="setTempLevel(1)">
                                                        </div>
                                                    
                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="2" onclick="setTempLevel(2)">
                                                        </div>

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Angemessen" data-bs-value="3" onclick="setTempLevel(3)">
                                                        </div>
                                            
                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="4" onclick="setTempLevel(4)">
                                                        </div>
                                
                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_normal.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Stinkt übelst - hazardous!!!" data-bs-value="5" onclick="setTempLevel(5)">
                                                        </div>
                                                    
                                                    </div>
                                                    <input type="hidden" name="temperature_level" id="temperature-level-input">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row my-0 p-2">
                                        <div class="col-sm-2 my-3">
                                            <img class="" src="./assets/img/numbers_in_circle/number_three_circle.svg" alt="number_three">
                                        </div>
                                        <div class="col-sm-2 text-start p-0">
                                            <p class="feedbackQ my-3">Schritt 3: Akustische Behaglichkeit angeben. </p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col justify-content-evenly text-center p-3">
                                                        
                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Alles OK!" data-bs-value="1" onclick="setNoiseLevel(1)">
                                                        </div>

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="2" onclick="setNoiseLevel(2)">
                                                        </div>
                                                        
                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Angemessen" data-bs-value="3" onclick="setNoiseLevel(3)">
                                                        </div>
                                                        
                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="4" onclick="setNoiseLevel(4)">
                                                        </div>
                                                        
                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_normal.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Stinkt übelst - hazardous!!!" data-bs-value="5" onclick="setNoiseLevel(5)">
                                                        </div>
                                                    
                                                    </div>
                                                    <input type="hidden" name="noise_level" id="noise-level-input">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row my-0 p-2">
                                        <div class="col-sm-2 my-3">
                                            <img class="" src="./assets/img/numbers_in_circle/number_four_circle.svg" alt="number_four">
                                        </div>
                                        <div class="col-sm-2 text-start p-0">
                                            <p class="feedbackQ my-3">Schritt 4: Luft-Behaglichkeit angeben.</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col justify-content-evenly text-center p-3">

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Alles OK!" data-bs-value="1" onclick="setAirQLevel(1)">
                                                        </div>

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="2" onclick="setAirQLevel(2)">
                                                        </div>

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Angemessen" data-bs-value="3" onclick="setAirQLevel(3)">
                                                        </div>

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="4" onclick="setAirQLevel(4)">
                                                        </div>

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_mask.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Stinkt übelst - hazardous!!!" data-bs-value="5" onclick="setAirQLevel(5)">
                                                        </div>

                                                    </div>
                                                    <input type="hidden" name="air_quality_level" id="air-quality-level-input">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row my-0 p-2">
                                        <div class="col-sm-2 my-3">
                                            <img class="" src="./assets/img/numbers_in_circle/number_five_circle.svg" alt="number_five">
                                        </div>
                                        <div class="col-sm-2 text-start p-0">
                                            <p class="feedbackQ my-3">Schritt 5: Gesamt-Behaglichkeit Behaglichkeit angeben.</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col justify-content-evenly text-center p-3">

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Alles OK!" data-bs-value="1" onclick="setHiggeLevel(1)">
                                                        </div>

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="2" onclick="setHiggeLevel(2)">
                                                        </div>

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Angemessen" data-bs-value="3" onclick="setHiggeLevel(3)">
                                                        </div>
                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="4" onclick="setHiggeLevel(4)">
                                                        </div>

                                                        <div class="icon-wrapper icon-element">
                                                            <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_normal.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Stinkt übelst - hazardous!!!" data-bs-value="5" onclick="setHiggeLevel(5)">
                                                        </div>

                                                    </div>
                                                    <input type="hidden" name="higge_level" id="higge-level-input">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row my-0 p-2 justify-content-center">
                                        <div class="col-sm-10 my-3 text-start p-0">
                                            <p class="feedbackQ my-3 p-3">Schritt 6: Nachricht senden (optional).</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="input-group">
                                            <span class="input-group-text"><i class="fa-regular fa-comment-dots"></i></span>
                                            <textarea  type="text" name="commentary" class="form-control" aria-label="With textarea" placeholder="Commentary"></textarea>
                                            @error('commentary')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror    
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <div class="row justify-content-center">
                                <div class="d-flex justify-content-center mb-3">
                                    <button class="btn btn-lg btn-success ml-sm-4" type="submit">Senden</button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-3 m-2 order-1 order-md-2 order-sm-2">
                <div id="image-container" class="myContainer col-xs-8">
                    <img class="img-fluid myMapImg" id="image" src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg')}}" alt="Office room plan">
                    <input type="hidden" name="noise" id="noise-input">
                  <input id="x-coordinates" type="hidden" name="x_coordinates">
                  <input id="y-coordinates" type="hidden" name="y_coordinates">
                </div>

    </form>

                <div class="col-sm-3">
                    <p id="x-display"></p>
                    <p id="y-display"></p>
                </div>
            </div>
        </div>
    </div>
    
</div>
</section>



  
@endsection

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
      <div class="row justify-content-center">
        <div class="col-md-6 mb-5 wow fadeInLeft" data-wow-delay=".4s">
          <div class="card mx-auto h-100" style="background-color: rgba(233, 228, 224, 0.8);">
            <div class="card-body p-5">
              <!-- Content of Card 1 -->
              <form id="fs-frm" name="survey-form" accept-charset="utf-8" action="https://formspree.io/f/{form_id}" method="post">
                <fieldset id="fs-frm-inputs">
                  <div class="form-group">
                    <label for="full-name">Schritt 1: Wähle die Bürozone aus, für die du Feedback geben möchtest, indem du sie im Grundriss anklickst.</label>
                  </div>
  
                  <div class="form-group">
                    <label for="timely">Schritt 2: Wärme-Behaglichkeit angeben.</label>
                    <div class="emoji-selection" style="background-color: rgba(233, 228, 224, 0.8); width: 100%; padding: 6px; border-radius: 4px; display: flex; justify-content: space-between;">
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Alles OK!" data-bs-value="1" onclick="setTempLevel(1)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="2" onclick="setTempLevel(2)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Angemessen" data-bs-value="3" onclick="setTempLevel(3)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="4" onclick="setTempLevel(4)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_normal.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Stinkt übelst - hazardous!!!" data-bs-value="5" onclick="setTempLevel(5)">
                      </div>
                    </div>
                    <input type="hidden" name="temperature_level" id="temperature-level-input">
                  </div>
                  
                  
                  
                  
                  
                  <div class="form-group">
                    <label for="timely">Schritt 3: Akustische Behaglichkeit angeben.</label>
                    <div class="emoji-selection" style="background-color: rgba(233, 228, 224, 0.8); width: 100%; padding: 6px; border-radius: 4px; display: flex; justify-content: space-between;">
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Alles OK!" data-bs-value="1" onclick="setNoiseLevel(1)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="2" onclick="setNoiseLevel(2)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Angemessen" data-bs-value="3" onclick="setNoiseLevel(3)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="4" onclick="setNoiseLevel(4)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_normal.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Stinkt übelst - hazardous!!!" data-bs-value="5" onclick="setNoiseLevel(5)">
                      </div>
                    </div>
                    <input type="hidden" name="noise_level" id="noise-level-input">
                  </div>
  
  
  
  
                  <div class="form-group">
                    <label for="timely">Schritt 4: Luft-Behaglichkeit angeben.</label>
                    <div class="emoji-selection" style="background-color: rgba(233, 228, 224, 0.8); width: 100%; padding: 6px; border-radius: 4px; display: flex; justify-content: space-between;">
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Alles OK!" data-bs-value="1" onclick="setAirQLevel(1)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="2" onclick="setAirQLevel(2)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Angemessen" data-bs-value="3" onclick="setAirQLevel(3)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="4" onclick="setAirQLevel(4)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_mask.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Stinkt übelst - hazardous!!!" data-bs-value="5" onclick="setAirQLevel(5)">
                      </div>
                    </div>
                    <input type="hidden" name="air_quality_level" id="air-quality-level-input">
                  </div>
  
  
                  <div class="form-group">
                    <label for="timely">Schritt 5: Gesamt-Behaglichkeit Behaglichkeit angeben.</label>
                    <div class="emoji-selection" style="background-color: rgba(233, 228, 224, 0.8); width: 100%; padding: 6px; border-radius: 4px; display: flex; justify-content: space-between;">
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Alles OK!" data-bs-value="1" onclick="setHiggeLevel(1)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="2" onclick="setHiggeLevel(2)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Angemessen" data-bs-value="3" onclick="setHiggeLevel(3)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="ss" data-bs-value="4" onclick="setHiggeLevel(4)">
                      </div>
                      <div class="icon-wrapper icon-element">
                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_normal.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Stinkt übelst - hazardous!!!" data-bs-value="5" onclick="setHiggeLevel(5)">
                      </div>
                    </div>
                    <input type="hidden" name="higge_level" id="higge-level-input">
                  </div>
  
                  <div class="form-group">
                    <label for="message">Schritt 6: Nachricht senden (optional).</label>
                    <textarea rows="3" name="commentary" id="message" class="form-control" placeholder="Deine Mitteilung" required=""></textarea>
                    @error('commentary')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror   
                  </div>
                  {{-- <input type="hidden" name="_subject" id="email-subject" value="Survey Responses"> --}}
                  <div class="text-center">
                    <button class="btn btn-indigo" type="submit"><i class="fa fa-paper-plane-o mr-2"></i> Senden</button>
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
              {{-- <div class="map-container">
                <div class="map-rectangle">
                  <img src="img/Grundriss_height-500.png" alt="Grundriss der Bürozone" style="max-width: 100%; max-height: 100%;">
                </div>
              </div> --}}

            {{-- <div id="image-container" class="map-container">
                <img class="img-fluid myMapImg" id="image" src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg')}}" alt="Office room plan">
              <input id="x-coordinates" type="hidden" name="x_coordinates">
              <input id="y-coordinates" type="hidden" name="y_coordinates">
            </div> --}}


          </form>
            <!-- FORM END-->
            <div class="col-sm-3">
              <p id="x-display"></p>
              <p id="y-display"></p>
          </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="page-footer indigo darken-2 center-on-small-only pt-0 mt-0">
      <div class="footer-copyright text-center py-3 font-small">
        <div class="container-fluid">
          <div>&copy; myOfficeX</div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="scripts/jquery.min.js?ver=1.1.0"></script>
    <script type="text/javascript" src="scripts/popper.min.js?ver=1.1.0"></script>
    <script type="text/javascript" src="scripts/bootstrap.min.js?ver=1.1.0"></script>
    <script type="text/javascript" src="scripts/wow.min.js?ver=1.1.0"></script>
    <script type="text/javascript" src="scripts/mdb.min.js?ver=1.1.0"></script>
    <script>
      new WOW().init();
    </script>
    </body>
    </html>