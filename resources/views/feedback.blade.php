@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')


<div class="container-fluid">
    <div class="container card shadow-2-strong shadow px-2 mb-0 bg-body">
        <div class="row justify-content-center px-5 pt-3">
            <div class="card col-sm-12 m-2 p-3 shadow p-3 bg-body">
    
                <h4 class="my-3">An diese Stelle hast du die Möglickkeit für deinen Arbeitsplatz ein Feedback abzugeben:</h4>
            </div>
        </div>
    
        <div class="row justify-content-center ">
            <div class="col-sm-8">
                <div class="container-fluid">
                    <div class="row my-2">
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-1 my-3">
                                <img class="" src="./assets/img/numbers_in_circle/number_one_circle.svg" alt="number_one">
                                {{-- <i class="fa-solid fa-1 p-3"></i> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-1 my-3">
                                <img class="" src="./assets/img/numbers_in_circle/number_two_circle.svg" alt="number_two">
                                {{-- <i class="fa-solid fa-2 p-3"></i> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-1 my-3">
                                <img class="" src="./assets/img/numbers_in_circle/number_three_circle.svg" alt="number_three">
                                {{-- <i class="fa-solid fa-3 p-3"></i> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row my-0 p-2">
                                        <div class="col-sm-2 p-2">
                                            <img class="" src="./assets/img/numbers_in_circle/number_four_circle.svg" alt="number_four">
                                            {{-- <i class="fa-solid fa-4 p-3"></i> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row my-0 p-2">
                                        <div class="col-sm-2 p-2">
                                            <img class="" src="./assets/img/numbers_in_circle/number_five_circle.svg" alt="number_five">
                                            {{-- <i class="fa-solid fa-5 fa-2xl my-3 p-3"></i> --}}
                                        </div>
                                        <div class="col-sm-2 text-start p-0">
                                            <h5 class="my-3">Gesamterlebnis mitteilen:</h5>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col justify-content-evenly text-center p-3">
                                                 
                                                        <!-- EXAMPLE POPOVER BS5 TOOLTIP START -->
                                                        {{-- <i class="fa-solid fa-frown fa-2xl" data-bs-toggle="tooltip" data-bs-placement="top" title="schlecht" data-bs-value="1"></i>
                                                        <img class="img-fluid" src="./assets/img/smiley_red_mask.svg" alt="smiley-test"  data-bs-toggle="tooltip" data-bs-placement="top" title="angemessen" />
                                                         --}}
                                                        <!-- EXAMPLE POPOVER BS5 TOOLTIP STOP -->
                                                
                                                        {{-- <i class="fa-solid fa-meh fa-2xl" data-bs-value="2"></i> --}}
                                                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great"  data-bs-toggle="tooltip" data-bs-placement="top" title="Alles OK!"  data-bs-value="1"/>
                                                        <div class="container">
                                                            <p data-css-only-tooltip="Tooltip 1">Text</p>
                                                          </div>

                                                        {{-- <img class="img-fluid" src="./assets/img/Subtractsmiley-test.svg" alt="smiley-test"  data-bs-toggle="tooltip" data-bs-placement="top" title="angemessen" /> --}}
                                                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice"  data-bs-toggle="tooltip" data-bs-placement="top" title=""  data-bs-value="2"/>
                                                        

                                                        {{-- <i class="fa-solid fa-smile fa-2xl" data-bs-toggle="tooltip" data-bs-placement="top" title="angemessen" data-bs-value="3"></i> --}}
                                                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok"  data-bs-toggle="tooltip" data-bs-placement="top" title="Angemessen"  data-bs-value="3"/>
                                                        

                                                        {{-- <i class="fa-solid fa-grin fa-2xl" data-bs-value="4"></i> --}}
                                                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh"  data-bs-toggle="tooltip" data-bs-placement="top" title=""  data-bs-value="4"/>
                                                        

                                                        {{-- <i class="fa-solid fa-laugh-squint fa-2xl" data-bs-toggle="tooltip" data-bs-placement="top" title="super" data-bs-value="5"></i> --}}
                                                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_normal.svg" alt="smiley-mask"  data-bs-toggle="tooltip" data-bs-placement="top" title="Stinkt ubelst - hazardous!!!"  data-bs-value="5"/>
                                                        
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <div class="row justify-content-center">
                                <div class="d-flex justify-content-center mb-3">
                                    <button class="btn btn-lg btn-primary mx-sm-4" data-bs-toggle="tooltip" data-bs-placement="bottom" title="BEstens">Feedback geben und beenden</button>
                                    <button class="btn btn-lg btn-success ml-sm-4">Feedback geben und Tipps erhalten</button>
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


 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
 <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNSxN9J" crossorigin="anonymous"></script>
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
      $('[data-bs-toggle="tooltip"]').tooltip();
    });



    </script>
        {{-- <script type="module">
                $(document).ready(function() {
                    console.log("ready!");
                });
        </script> --}}

@endsection