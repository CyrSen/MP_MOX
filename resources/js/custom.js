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
    iconElement.classList.add('fa', 'fa-solid', 'fa-location-dot', 'locationIcon', 'tooltip-icon'); // Add classes for the desired icon

    // Remove existing location dots
    var existingLocationDots = document.getElementsByClassName('locationIcon');
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

document.addEventListener("DOMContentLoaded", function() {
  var image = document.getElementById('image');
  var mapContainer = document.getElementById('image-container');

    // Handle category select change
var categorySelect = document.getElementById('category-select');
categorySelect.addEventListener('change', function() {
  var selectedCategory = this.value;

  // Get the start and end dates from the form inputs
  var startDateInput = document.getElementById('start-date-input');
  var endDateInput = document.getElementById('end-date-input');
  var startDate = new Date(startDateInput.value);
  var endDate = new Date(endDateInput.value);

  // Call the filterEntriesByDate function with the selected date range and category
  filterEntriesByDate(startDate, endDate, selectedCategory);
});

  function filterEntriesByDate(startDate, endDate, category) {
    // Remove existing location icons
    var existingLocationIcons = document.getElementsByClassName('locationIcon');
    while (existingLocationIcons.length > 0) {
      existingLocationIcons[0].remove();
    }

    // Loop through the feedback map entries
    feedbackMapEntries.forEach(function(entry) {
      // Retrieve the entry data
      var id = entry.id;
      var name = entry.user.name;
      var x = entry.x_coordinates;
      var y = entry.y_coordinates;
      var createdAt = entry.created_at;
      var noiseLevel = entry.noise_level;
      var temperatureLevel = entry.temperature_level;
      var airQualityLevel = entry.air_quality_level;
      var higgeLevel = entry.higge_level;
      var commentary = entry.commentary;

      // Convert the createdAt string to a Date object
      var entryDate = new Date(createdAt);

      // Check if the entryDate is within the specified range and matches the selected category
      if (entryDate >= startDate && entryDate <= endDate && (category === 'all' || entry[category])) {
        // Calculate the position of the icon based on the entry coordinates
        var xPercentage = parseFloat(x).toFixed(2);
        var yPercentage = parseFloat(y).toFixed(2);
        var left = xPercentage + '%';
        var top = yPercentage + '%';

        // Create the icon element based on the selected category
        var icon = document.createElement('i');
        icon.classList.add('fa-solid');
        icon.classList.add('locationIcon');
        icon.style.position = 'absolute';
        icon.style.textAlign = 'left';
        icon.style.left = left;
        icon.style.top = top;

        switch (category) {
          case 'noise_level':
            icon.classList.add('fa-volume-high');
            break;
          case 'temperature_level':
            icon.classList.add('fa-temperature-high');
            break;
          case 'air_quality_level':
            icon.classList.add('fa-spray-can-sparkles');
            break;
          case 'higge_level':
            icon.classList.add('fa-face-laugh-wink');
            break;
          default:
            icon.classList.add('fa-map-marker-alt');
            break;
        }

        // Set Bootstrap tooltip attributes
        icon.setAttribute('data-bs-toggle', 'tooltip');
        if (xPercentage > 50) {
          icon.setAttribute('data-bs-placement', 'right');
        } else {
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
          'Higge Level: ' + higgeLevel + '<br>' +
          'created@: ' + createdAt + '<br>' +
          'Kommentar: ' + commentary);
  // Build the tooltip content based on the selected category
  var tooltipContent = 'ID: ' + id + '<br>' +
    'Name: ' + name + '<br>' +
    'X: ' + x + '<br>' +
    'Y: ' + y + '<br>';

  if (category === 'noise_level') {
    tooltipContent += 'Noise Level: ' + noiseLevel + '<br>';
  } else if (category === 'temperature_level') {
    tooltipContent += 'Temperature Level: ' + temperatureLevel + '<br>';
  } else if (category === 'air_quality_level') {
    tooltipContent += 'Air Quality Level: ' + airQualityLevel + '<br>';
  } else if (category === 'higge_level') {
    tooltipContent += 'Higge Level: ' + higgeLevel + '<br>';
  }

  tooltipContent += 'created@: ' + createdAt + '<br>' +
    'Kommentar: ' + commentary;

  icon.setAttribute('title', tooltipContent);
        // Add the icon to the map container
        mapContainer.appendChild(icon);
      }
    });

    // Initialize Bootstrap tooltips after adding the new icons
    $('[data-bs-toggle="tooltip"]').tooltip();
  }

  // Handle filter form submission
  var filterForm = document.getElementById('filter-form');
  filterForm.addEventListener('submit', function(event) {
    event.preventDefault();

    // Get the start and end dates from the form inputs
    var startDateInput = document.getElementById('start-date-input');
    var endDateInput = document.getElementById('end-date-input');
    var startDate = new Date(startDateInput.value);
    var endDate = new Date(endDateInput.value);

    // Get the selected category from the select input
    var categorySelect = document.getElementById('category-select');
    var category = categorySelect.value;

    // Call the filterEntriesByDate function with the selected date range and category
    filterEntriesByDate(startDate, endDate, category);
  });

  // Initialize Bootstrap tooltips on page load
  $('[data-bs-toggle="tooltip"]').tooltip();

// Function to initially display all entries without date filtering
function displayAllEntries() {
  filterEntriesByDate(new Date(0), new Date(), 'all');
}

  // Call the displayAllEntries function on page load
  displayAllEntries();
});


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