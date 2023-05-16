// START LOCATION GET COORDINATES AND SHOW LOCATION VARIANT 01 IMAGE START ----------------------------------------------------------------//

document.addEventListener("DOMContentLoaded", function() {
  var imageContainer = document.getElementById('image-container');
  var image = document.getElementById('image');
  var xCoordinateFormInput = document.getElementById('x-coordinates');
  var yCoordinateFormInput = document.getElementById('y-coordinates');
  var xDisplay = document.getElementById('x-display');
  var yDisplay = document.getElementById('y-display');

  var clickX; // Variable to store the X coordinate of the clicked location
  var clickY; // Variable to store the Y coordinate of the clicked location

  imageContainer.style.position = 'relative'; // Set the position of the container

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
    xCoordinateFormInput.value = xPercentage.toFixed(2);
    yCoordinateFormInput.value = yPercentage.toFixed(2);

    // Display the percentage values
    xDisplay.textContent = "X coordinates: " + xPercentage.toFixed(2) + '%';
    yDisplay.textContent = "Y coordinates: " + yPercentage.toFixed(2) + '%';

    console.log("X coordinates: " + xPercentage.toFixed(2) + '%');
    console.log("Y coordinates: " + yPercentage.toFixed(2) + '%');

    // Store the clicked location coordinates in variables
    clickX = xPercentage;
    clickY = yPercentage;

    // Create the icon element
    var iconElement = document.createElement('i');
    iconElement.classList.add('fa', 'fa-map-marker-alt', 'locationIcon'); // Add classes for the desired icon

    // Set the position of the icon using the clicked coordinates
    iconElement.style.position = 'absolute';
    iconElement.style.left = clickX + '%';
    iconElement.style.top = clickY + '%';

    // Append the icon to the image container
    imageContainer.appendChild(iconElement);
  });
});

// START LOCATION GET COORDINATES AND SHOW LOCATION VARIANT 01 IMAGE END ----------------------------------------------------------------//


// START LOCATION GET COORDINATES AND SHOW LOCATION VARIANT 02 IMAGE START ----------------------------------------------------------------//

/* document.addEventListener("DOMContentLoaded", function() {
  var image = document.getElementById('image');
  var xCoordinateFormInput = document.getElementById('x-coordinates');
  var yCoordinateFormInput = document.getElementById('y-coordinates');
  var xDisplay = document.getElementById('x-display');
  var yDisplay = document.getElementById('y-display');
  var mapContainer = document.getElementById('image-container');

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
    xCoordinateFormInput.value = xPercentage.toFixed(2);
    yCoordinateFormInput.value = yPercentage.toFixed(2);

    // Display the percentage values
    xDisplay.textContent = "X coordinates: " + xPercentage.toFixed(2) + '%';
    yDisplay.textContent = "Y coordinates: " + yPercentage.toFixed(2) + '%';

    console.log("X coordinates: " + xPercentage.toFixed(2) + '%');
    console.log("Y coordinates: " + yPercentage.toFixed(2) + '%');

    // Create the image icon
    var icon = new Image();
    icon.src = 'path/to/your/image.png';
    icon.style.position = 'absolute';
    icon.style.left = xPercentage + '%';
    icon.style.top = yPercentage + '%';

    // Add the image icon to the map container
    mapContainer.appendChild(icon);
  });
}); */

// START LOCATION GET COORDINATES AND SHOW LOCATION VARIANT 02 IMAGE END ----------------------------------------------------------------//


// START TOOLTIP START ----------------------------------------------------------------//


  $(function(){
    $('[data-bs-toggle="tooltip"]').tooltip();
  });
  
// END TOOLTIP END ----------------------------------------------------------------//


