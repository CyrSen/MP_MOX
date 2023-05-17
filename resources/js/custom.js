
//  LOCATION GET COORDINATES AND SHOW LOCATION VARIANT 01 IMAGE START ----------------------------------------------------------------//

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
    iconElement.classList.add('fa', 'fa-solid', 'fa-location-dot', 'locationIcon'); // Add classes for the desired icon

    // Set the position of the icon using the clicked coordinates
    iconElement.style.position = 'absolute';
    iconElement.style.left = clickX + '%';
    iconElement.style.top = clickY + '%';

    // Append the icon to the image container
    imageContainer.appendChild(iconElement);
  });
});

//  LOCATION GET COORDINATES AND SHOW LOCATION VARIANT 01 IMAGE END ----------------------------------------------------------------//


//  LOCATION GET COORDINATES AND SHOW LOCATION VARIANT 02 IMAGE START ----------------------------------------------------------------//

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

//  LOCATION GET COORDINATES AND SHOW LOCATION VARIANT 02 IMAGE END ----------------------------------------------------------------//

//  LOCATION SET LOCATION WITH ALL DATABASE VALUES AS TOOLTIPS (GEREATED "createClassList") START---------------------------------------------------------------//


document.addEventListener("DOMContentLoaded", function() {
  var image = document.getElementById('image');
  var mapContainer = document.getElementById('image-container');

  // Loop through the feedback map entries
  feedbackMapEntries.forEach(function(entry) {
    // Retrieve the entry data
    var id = entry.id;
    var name = entry.user.name;
    var x = entry.x_coordinates;
    var y = entry.y_coordinates;
    var noiseLevel = entry.noise_level;
    var temperatureLevel = entry.temperature_level;
    var airQualityLevel = entry.air_quality_level;
    var higgeLevel = entry.higge_level;

    // Calculate the position of the icon based on the entry coordinates
    var xPercentage = parseFloat(x).toFixed(2);
    var yPercentage = parseFloat(y).toFixed(2);
    var left = xPercentage + '%';
    var top = yPercentage + '%';

    // Create the icon element
    var icon = document.createElement('i');
    icon.classList.add('fa-solid');
    icon.classList.add('fa-map-marker-alt');
    icon.classList.add('locationIcon');
    icon.style.position = 'absolute';
    icon.style.textAlign = 'left';
    icon.style.left = left;
    icon.style.top = top;
    /* icon.style.text.align = left; */

    // Set Bootstrap tooltip attributes
    icon.setAttribute('data-bs-toggle', 'tooltip');
    if (xPercentage > 50) {
    icon.setAttribute('data-bs-placement', 'right');
    } else  {
      icon.setAttribute('data-bs-placement', 'left');
    }
    icon.setAttribute('data-bs-custom-class', 'custom-tooltip');
    icon.setAttribute('data-bs-html', 'true');
    icon.setAttribute('title', 'ID: ' + id + '<br>' +
                      'Name: ' + name + '<br>' +
                      'X: ' + x + '<br>' +
                      'Y: ' + y + '<br>' +
                      'Noise Level: ' + noiseLevel + '<br>' +
                      'Temperature Level: ' + temperatureLevel + '<br>' +
                      'Air Quality Level: ' + airQualityLevel + '<br>' +
                      'Higge Level: ' + higgeLevel);
    /* icon.setAttribute('data-bs-value', '1'); */ // Replace '1' with the desired value

    // Add the icon to the map container
    mapContainer.appendChild(icon);
  });


});

//  LOCATION SET LOCATION WITH ALL DATABASE VALUES AS TOOLTIPS (GEREATED "createClassList") END---------------------------------------------------------------//



//  TOOLTIP START ----------------------------------------------------------------//


  $(function(){
    $('[data-bs-toggle="tooltip"]').tooltip();
    
  });
  
//  TOOLTIP END ----------------------------------------------------------------//


