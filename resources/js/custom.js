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
    iconElement.classList.add('fa', 'fa-solid', 'fa-location-dot', 'locationIconFeedback', 'tooltip-icon'); // Add classes for the desired icon

    // Remove existing location dots
    var existingLocationDots = document.getElementsByClassName('locationIconFeedback');
    for (var i = 0; i < existingLocationDots.length; i++) {
      existingLocationDots[i].remove();
    }

    // Set the position of the icon using the clicked coordinates
    iconElement.style.position = 'absolute';
    iconElement.style.left = clickX + '%';
    iconElement.style.top = clickY + '%';

    // Append the icon to the image container
    imageContainer.appendChild(iconElement);
  });
});

//  LOCATION GET COORDINATES AND SHOW LOCATION VARIANT 01 IMAGE END ----------------------------------------------------------------//

//  LOCATION GET COORDINATES AND SHOW LOCATION VARIANT 01 IMAGE START ----------------------------------------------------------------//

  /// Function to filter and display entries based on the chosen time span



//  LOCATION GET COORDINATES AND SHOW LOCATION VARIANT 01 IMAGE END ----------------------------------------------------------------//
  

/*----------OVERLAY ICON START --------------------------------------------------------------*/

function addOverlayIcon(event, category) {
  const icon = event.currentTarget;
  const categoryWrapper = icon.closest('.emoji-selection');

  // Remove existing overlay icons from icons within the same category
  const categoryIcons = categoryWrapper.getElementsByClassName('icon-element');
  for (let i = 0; i < categoryIcons.length; i++) {
    const categoryIcon = categoryIcons[i];
    const existingOverlayIcons = categoryIcon.querySelectorAll('.overlay-icon');
    existingOverlayIcons.forEach(function(overlayIcon) {
      overlayIcon.remove();
    });
  }

/*----------OVERLAY ICON END --------------------------------------------------------------*/

  // Create a new overlay icon element
  const overlayIcon = document.createElement('img');
  overlayIcon.classList.add('overlay-icon');
  overlayIcon.classList.add('animate__animated');
  overlayIcon.classList.add('animate__zoomIn');
  overlayIcon.src = './assets/img/icons_var/checkmark_small_001.svg';

  // Append the overlay icon element as a child of the clicked icon
  icon.appendChild(overlayIcon);
}

// Attach the click event listener to each icon
const icons = document.getElementsByClassName('icon-element');
for (let i = 0; i < icons.length; i++) {
  icons[i].addEventListener('click', addOverlayIcon);
}

//  TOOLTIP/POPOVER START ----------------------------------------------------------------//


$(function(){
  $('[data-bs-toggle="tooltip"]').tooltip();
  
});

$(function(){
  $('[data-bs-toggle="popover"]').popover({html:true})
   
});

//  TOOLTIP/POPOVER END ----------------------------------------------------------------//