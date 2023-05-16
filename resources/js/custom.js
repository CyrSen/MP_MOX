// START LOCATION GET COORDINATES START ----------------------------------------------------------------//




document.addEventListener("DOMContentLoaded", function() {
    var image = document.getElementById('image');
    var xCoordinateFormInput = document.getElementById('x-coordinates');
    var yCoordinateFormInput = document.getElementById('y-coordinates');
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
    xDisplay.textContent = "X coordinates: " + xPercentage.toFixed(2) + '%';
    yDisplay.textContent = "Y coordinates: " + yPercentage.toFixed(2) + '%';
  
    console.log("X coordinates: " + xPercentage.toFixed(2) + '%');
    console.log("Y coordinates: " + yPercentage.toFixed(2) + '%');
  
    // Store the clicked location coordinates in variables
    clickX = xPercentage;
    clickY = yPercentage;
  });
  
  $('.noise-icons i').click(function() {
  var noiseValue = $(this).data('value');
  var emojiClass = getEmojiClass(noiseValue);
  
  // Store data in local storage
  localStorage.setItem('x-coordinates', xCoordinateFormInput.value);
  localStorage.setItem('y-coordinates', yCoordinateFormInput.value);
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
// START LOCATION GET COORDINATES START ----------------------------------------------------------------//
  

// START TOOLTIP START ----------------------------------------------------------------//


  $(function(){
    $('[data-bs-toggle="tooltip"]').tooltip();
  });
  
// END TOOLTIP END ----------------------------------------------------------------//


