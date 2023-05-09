@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')


<div class="container-fluid">
    <div class="container card ">
        <div class="row justify-content-center px-5 pt-5">
            <div class="card col-sm-12 m-2 p-3">
    
                <h4 class="my-3">An diese Stelle hast du die Möglickkeit für deinen Arbeitsplatz ein Feedback abzugeben:</h4>
            </div>
        </div>
    
        <div class="row justify-content-center mb-5">
            <div class="card col-sm-8 m-2 p-3 order-last order-sm-first">
                <div class="container-fluid">
                    <div class="row my-2">
                        <div class="col-sm-12 mb-2">
                            <div class="card text-start">
                                <i class="fa-solid fa-1 p-3"></i>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card text-start">
                                <i class="fa-solid fa-2 p-3"></i>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card text-start">
                                <i class="fa-solid fa-3 p-3"></i>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card text-start">
                                <i class="fa-solid fa-4 p-3"></i>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-1 my-3">
                                            <i class="fa-solid fa-5 fa-2xl my-3 p-3"></i>
                                        </div>
                                        <div class="col-sm-3 my-3 text-start">
                                            <h5 class="my-3">Gesamterlebnis mitteilen:</h5>
                                        </div>
                                        <div class="col-sm-8 my-4">
                                            <div class="container">
                                                <div class="row my-3">
                                                    <div class="col">
                                                        <!-- EXAMPLE POPOVER BS5 TOOLTIP START -->
                                                        <i class="fa-solid fa-frown fa-2x" data-toggle="tooltip" data-placement="top" title="good" data-value="1"></i>
                                                        <!-- EXAMPLE POPOVER BS5 TOOLTIP STOP -->
                                                    </div>
                                                    <div class="col">
                                                        <i class="fa-solid fa-meh fa-2xl" data-value="2"></i>
                                                    </div>
                                                    <div class="col">
                                                        <i class="fa-solid fa-smile fa-2xl" data-value="3"></i>
                                                    </div>
                                                    <div class="col">
                                                        <i class="fa-solid fa-grin fa-2xl" data-value="4"></i>
                                                    </div>
                                                    <div class="col">
                                                        <i class="fa-solid fa-laugh-squint fa-2xl" data-value="5"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="row justify-content-center">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary mx-sm-4">Feedback geben und beenden</button>
                                    <button class="btn btn-primary ml-sm-4">Feedback geben und Tipps erhalten</button>
                                  </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-3 m-2">
                <div id="image-container" class="myContainer col-xs-8">
                    <img class="img-fluid myMapImg" id="image" src="{{ asset('assets/img/map_raeffels12_draft_01.png')}}" alt="Office room plan">
                    <input type="hidden" name="noise" id="noise-input">
                  <input id="x-coordinate" type="hidden" name="x-coordinate">
                  <input id="y-coordinate" type="hidden" name="y-coordinate">
                </div>
                <div class="col-sm-3">
                    <p id="x-display"></p>
                    <p id="y-display"></p>
                </div>
            </div>
        </div>
    </div>
    
</div>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card1">
                <div class="card-header">OfficeUX Test</div>
                    <div class="col-sm">
                        <h1 class="display text-center">Office R-Strasse 12</h1>
                        <div class="row justify-content-center">
                            <div class="col-sm-8">
                              @if (Auth::check())
                              <h3 class="text-center">Welcome, {{ Auth::user()->name }}!<br>Chose Your office Experience!</h3>
                          @else
                              <p><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to post a new topic.</p>
                          @endif
                          
                                <form method="POST" action="{{ route('submit-form') }}">
                                    @csrf
                                    <div id="image-container" class="myContainer col-xs-8">
                                          <img class="img-fluid myMapImg" id="image" src="{{ asset('assets/img/prov_map_offixeux_test.png')}}" alt="Office room plan">
                                          <input type="hidden" name="noise" id="noise-input">
                                        <input id="x-coordinate" type="hidden" name="x-coordinate">
                                        <input id="y-coordinate" type="hidden" name="y-coordinate">
                                      </div>
                                      <!-- place ICONS start -->
                                      <div class="noise-icons m-2 text-center">
                                        <i class="fa  fa-comment-medical fa-2xl px-2"></i>
                                        <i class="fa-solid fa-frown fa-2xl px-2" data-value="1"></i>
                                        <i class="fa-solid fa-meh fa-2xl px-2" data-value="2"></i>
                                        <i class="fa-solid fa-smile fa-2xl px-2" data-value="3"></i>
                                        <i class="fa-solid fa-grin fa-2xl px-2" data-value="4"></i>
                                        <i class="fa-solid fa-laugh-squint fa-2xl px-2" data-value="5"></i>
                                      </div>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping" for="department">Department:</span>
                                        <select class="form-select" aria-label="Default select example" id="department" name="department">
                                            <option value="sales">Sales</option>
                                            <option value="marketing">Marketing</option>
                                            <option value="finance">Finance</option>
                                            <option value="it">IT</option>
                                        </select>
                                    </div> 
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"  for="temperature">Room temperature:</span>1
                                        <input  type="range" class="form-range" name="temperature" min="0" max="10" step="1">10
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-success" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <div class="card-footer text-center" style="font-weight:bold; font-size:120%;" >
                <p id="x-display"></p>
                <p id="y-display"></p>
                <p>For Details go here:<a href="/map_showall">
                   <b>All Locations List</a></p>
                </div>
            </div>
        </div>
    </div>
</div> --}}
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
{{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNSxN9J" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 --}}
<script>

    document.addEventListener("DOMContentLoaded", function() {
      var image = document.getElementById('image');
      var xCoordinateFormInput = document.getElementById('x-coordinate');
      var yCoordinateFormInput = document.getElementById('y-coordinate');
      var xDisplay = document.getElementById('x-display');
      var yDisplay = document.getElementById('y-display');
    
      var clickX; // Variable to store the X coordinate of the clicked location
      var clickY; // Variable to store the Y coordinate of the clicked location
    
    image.addEventListener('click', function(event) {
      var x = event.offsetX;
      var y = event.offsetY;
    
      // Get the width and height of the image
      var imageWidth = image.offsetWidth;
      var imageHeight = image.offsetHeight;
    
      // Calculate the percentage values of x and y
      var xPercentage = (x / imageWidth) * 100;
      var yPercentage = (y / imageHeight) * 100;
    
      // Set the percentage values to the form inputs
      xCoordinateFormInput.value = xPercentage.toFixed(2) ;
      yCoordinateFormInput.value = yPercentage.toFixed(2) ;
    
      // Display the percentage values
      xDisplay.textContent = "X coordinate: " + xPercentage.toFixed(2) + '%';
      yDisplay.textContent = "Y coordinate: " + yPercentage.toFixed(2) + '%';
    
      console.log("X coordinate: " + xPercentage.toFixed(2) + '%');
      console.log("Y coordinate: " + yPercentage.toFixed(2) + '%');
    
      // Store the clicked location coordinates in variables
      clickX = xPercentage;
      clickY = yPercentage;
    });
    
    $('.noise-icons i').click(function() {
    var noiseValue = $(this).data('value');
    var emojiClass = getEmojiClass(noiseValue);
    
    // Store data in local storage
    localStorage.setItem('x-coordinate', xCoordinateFormInput.value);
    localStorage.setItem('y-coordinate', yCoordinateFormInput.value);
    localStorage.setItem('noiseValue', noiseValue);
    
    // Create the emoji icon using the stored location coordinates
    var emojiElement = document.createElement('i');
    emojiElement.classList.add('fa-solid');
    emojiElement.classList.add('fa-2x');
    if (emojiClass !== '') {
      emojiElement.classList.add(emojiClass);
    }
    emojiElement.style.left = clickX + '%';
    emojiElement.style.top = clickY + '%';
    
    image.parentElement.appendChild(emojiElement);
    
    // Set the selected noise value in the input field
    $('#noise-input').val(noiseValue);
    });
    
      /* function getEmojiClass(value) {
        switch (value) {
          case 1:
            console.log('Selected noise value: 1');
            return 'fa-frown';
          case 2:
            console.log('Selected noise value: 2');
            return 'fa-meh';
          case 3:
            console.log('Selected noise value: 3');
            return 'fa-smile';
          case 4:
            console.log('Selected noise value: 4');
            return 'fa-grin';
          case 5:
            console.log('Selected noise value: 5');
            return 'fa-laugh-squint';
          default:
            console.log('Invalid noise value');
            return '';
        }
      } */
    
    });
    
    /* function setLocationOnMap(x_coordinate, y_coordinate, noise) {
      var map = L.map('map').setView([x_coordinate, y_coordinate], 13);
      var marker = L.marker([x_coordinate, y_coordinate]).addTo(map);
      var popup = L.popup().setContent('Noise level: ' + noise);
      marker.bindPopup(popup).openPopup();
    }
     */
    

    /* Tooltip */

    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });

    </script>
    

@endsection