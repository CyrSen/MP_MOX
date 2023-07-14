<!DOCTYPE html>
@extends('layouts.master')

@section('title', 'myOfficeX')

@section('content')

    <!-- Feedback -->

    <section id="feedback" {{-- style="margin-bottom:10rem;" --}}>
        <div class="rgba-black-strong"></div>
        <div class="container py-1">
            <!-- FORM START-->
            <form action="{{ route('feedback.store', ['feedbackMapId' => $feedbackMapId]) }}" method="POST">
                @csrf
                    <div class="row justify-content-center mt-0 mt-md-3 pt-3 pt-md-0 pb-3">
                        <div id="{{-- animationLeft --}}" class="feedbackPanels col-md-6 mt-3 mb-1 mb-md-5 animate__animated animate__fadeInLeft animate__delay-1s">
                                <div class="card mx-auto h-100" style="background-color: rgba(233, 228, 224, 0.8);">
                                    <div
                                        class="card-body d-flex flex-column justify-content-center align-items-center pt-1 pb-0 px-1 px-md-3">
                                        <!-- Content of Card 1 -->
                                        <div class="col">
                                            <h2 class="h1 mb-3 px-3 pt-3">Feedback geben</h2>
                                            <div class="feedback-font px-3">
                                                Schritt 1: Wähle die Bürozone aus, für die du Feedback geben möchtest, indem du
                                                sie im Grundriss anklickst.
                                            </div>
                                        </div>
                                        <div id="image-container" class="map-container tooltip-icon mb-4 mb-md-5">
                                            <img class="img-fluid mapFeedback" id="image"
                                                src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}" alt="Office room plan">
                                            <input id="x-coordinates" type="hidden" name="x_coordinates">
                                            <input id="y-coordinates" type="hidden" name="y_coordinates">
                                        </div>
                                        @error('x_coordinates')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                            <!--ADMIN USE CALIBRATE POSITION -->
                                <div class="col-sm-3" style="display:none;">
                                        <p id="x-display"></p>
                                        <p id="y-display"></p>
                                    </div>
                                </div>
                            </div>   
                        </div>

                        <div id="{{-- animationRight --}}" class="feedbackPanels col-md-6 mt-3 mb-5 animate__animated animate__fadeInRight animate__delay-1s">
                            <div class="card mx-auto h-100" style="background-color: rgba(233, 228, 224, 0.8);">
                                <div class="card-body px-3 px-md-5 py-3">
                                    <div class="form-group mt-3">
                                        <label class="feedback-font" for="timely">Schritt 2: Temperatur-Komfort.</label>
                                        <div class="emoji-selection mt-2 mb-2 px-2 mb-4"
                                            style="background-color: rgba(233, 228, 224, 0.8);  border-radius: 4px; display: flex; justify-content: space-between;">
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_cold.svg" alt="smiley-great"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Zu kalt" data-bs-value="1" onclick="setTempLevel(1)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_nottoocold.svg" alt="smiley-nice"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Kühl" data-bs-value="2" onclick="setTempLevel(2)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_excellent.svg" alt="smiley-ok"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Optimal" data-bs-value="3" onclick="setTempLevel(3)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_nottoohot.svg" alt="smiley-meh"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Warm" data-bs-value="4" onclick="setTempLevel(4)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_hot_red.svg" alt="smiley-mask"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Zu heiss" data-bs-value="5" onclick="setTempLevel(5)">
                                            </div>
                                        </div>
                                        <input type="hidden" name="temperature_level" id="temperature-level-input">
                                    </div>

                                    <div class="form-group">
                                        <label class="feedback-font" for="timely">Schritt 3: Geräusch-Komfort.</label>
                                        <div class="emoji-selection mt-2 mb-2 px-2 mb-4"
                                            style="background-color: rgba(233, 228, 224, 0.8);  border-radius: 4px; display: flex; justify-content: space-between;">
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_silent.svg" alt="smiley-great"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Zu still" data-bs-value="2"
                                                    onclick="setNoiseLevel(1)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_notloud.svg" alt="smiley-nice"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Leise" data-bs-value="3" onclick="setNoiseLevel(3)"
                                                    style="position: relative; left: 3px;">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_excellent.svg" alt="smiley-ok"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Optimal" data-bs-value="5" onclick="setNoiseLevel(5)"
                                                    style="position: relative; left: 8px;">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_poor.svg" alt="smiley-meh"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Belebt" data-bs-value="3" onclick="setNoiseLevel(3)"
                                                    style="position: relative; left: 13px;">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_loud_red.svg" alt="smiley-mask"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Zu laut" data-bs-value="1" onclick="setNoiseLevel(1)"
                                                    style="position: relative;left: 10px;">
                                            </div>
                                        </div>
                                        <input type="hidden" name="noise_level" id="noise-level-input">
                                    </div>

                                    <div class="form-group">
                                        <label class="feedback-font" for="timely">Schritt 4: Luft-Komfort.</label>
                                        <div class="emoji-selection mt-2 mb-2 px-2 mb-4"
                                            style="background-color: rgba(233, 228, 224, 0.8);  border-radius: 4px; display: flex; justify-content: space-between;">
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_excellent.svg" alt="smiley-great"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Ausgezeichnet" data-bs-value="5"
                                                    onclick="setAirQLevel(5)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_good.svg" alt="smiley-nice"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Gut" data-bs-value="4" onclick="setAirQLevel(4)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_average.svg" alt="smiley-ok"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Akzeptabel" data-bs-value="3"
                                                    onclick="setAirQLevel(3)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_poor.svg" alt="smiley-meh"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Mässig" data-bs-value="2" onclick="setAirQLevel(2)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_smelly.svg" alt="smiley-mask"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Schlecht" data-bs-value="1"
                                                    onclick="setAirQLevel(1)">
                                            </div>
                                        </div>
                                        <input type="hidden" name="air_quality_level" id="air-quality-level-input">
                                    </div>

                                    <div class="form-group">
                                        <label class="feedback-font" for="timely">Schritt 5: Gesamt-Komfort.</label>
                                        <div class="emoji-selection mt-2 mb-2 px-2 mb-4"
                                            style="background-color: rgba(233, 228, 224, 0.8);  border-radius: 4px; display: flex; justify-content: space-between;">
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_excellent.svg" alt="smiley-great"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Ausgezeichnet" data-bs-value="5"
                                                    onclick="setHiggeLevel(5)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_good.svg" alt="smiley-nice"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Gut" data-bs-value="4" onclick="setHiggeLevel(4)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_average.svg" alt="smiley-ok"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Akzeptabel" data-bs-value="3"
                                                    onclick="setHiggeLevel(3)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_poor.svg" alt="smiley-meh"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Mässig" data-bs-value="2" onclick="setHiggeLevel(2)">
                                            </div>
                                            <div class="icon-wrapper icon-element">
                                                <img class="feedbackEmojis img-fluid  p-2 tooltip-icon"
                                                    src="./assets/img/icons_var/smiley_new_worst.svg" alt="smiley-mask"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Schlecht" data-bs-value="1"
                                                    onclick="setHiggeLevel(1)">
                                            </div>
                                        </div>
                                        <input type="hidden" name="higge_level" id="higge-level-input">
                                    </div>

                                    <div class="form-group">
                                        <label class="feedback-font" for="message">Schritt 6: Nachricht senden (optional).</label>
                                        <textarea rows="3" name="commentary" id="message" class="form-control mt-2"
                                            placeholder="Deine Mitteilung"{{--  required="" --}}></textarea>
                                        @error('commentary')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                <div class="text-center mt-5">
                                    <button class="btn btn-indigo text-white p-3" type="submit"><i
                                            class="fa fa-paper-plane-o mr-2"></i> Senden</button>
                                </div>
                        </div>
                    </div>
            </form>
        </div>
    </section>

@endsection

<script>
    /* document.addEventListener('DOMContentLoaded', function() {
        var element = document.getElementById('animationLeft');
        element.classList.add('animate__animated', 'animate__fadeInLeft');
    });

    document.addEventListener('DOMContentLoaded', function() {
        var element = document.getElementById('animationRight');
        element.classList.add('animate__animated', 'animate__fadeInRight');
    }); */
</script>
