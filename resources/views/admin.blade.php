<!DOCTYPE html>
@extends('layouts.master')

@section('title', 'myOfficeX')

@section('content')

<section id="admin">
    <div class="rgba-black-strong"></div>
    <div class="container-fluid" style="margin-top: 10vh;">
        <div class="row justify-content-evenly">
            <!-- Map Views -->
            <div class="col-3 px-0">
                <div class="card mapAdmin py-2 ml-4 d-flex align-items-center">
                    <!-- Map 1 -->
                    {{--   --}}
                      <div id="noise-map" class="map-container">
                      <p class="lead" class="text-center">Lärmempfinden</p>
                      <img class="img-fluid" id="image1" src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}"
                          alt="Office room plan">
                    </div>
                </div>
            </div>
            <div class="col-3 px-0">
                <div class="card mapAdmin py-2 ml-4 d-flex align-items-center">
                    <!-- Map 2 -->
                      <div id="temperature-map" class="map-container">
                      <p class="lead" class="text-center">Temperaturempfinden</p>
                      <img class="img-fluid" id="image2" src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}"
                          alt="Office room plan">
                    </div>
                </div>
            </div>
            <div class="col-3 px-0">
                <div class="card mapAdmin py-2 ml-4 d-flex align-items-center">
                    <!-- Map 3 -->
                      <div id="air-quality-map" class="map-container">
                      <p class="lead" class="text-center">Raumluftqualität</p>
                      <img class="img-fluid" id="image3" src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}"
                          alt="Office room plan">
                    </div>
                </div>
            </div>
            <div class="col-3 px-0">
                <div class="card mapAdmin py-2 ml-4 d-flex align-items-center">
                    <!-- Map 4 -->
                    <div id="higge-map" class="map-container">
                      <p class="lead" class="text-center">Happiness</p>
                      <img class="img-fluid" id="image4" src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}"
                          alt="Office room plan">
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter and Table -->
        <div class="row mt-3">
            <div class="col-3">
                <div class="card mapAdmin ">
                    <!-- Filter/Select Div -->
                      <div class="row justify-content-center">
                        <div class="col-sm-12 mt-2 mb-3 text-center">
                          <label for="" class="text-start">Choose Date Range</label>
                          <div class="row justify-content-center">
                              <div class="col-sm-6">

                                  <label for="start-date-input" class="form-label">Start Date:</label>
                                  <input type="date" class="form-control bg-dark text-white" id="start-date-input" required>
                              </div>
                              <div class="col-sm-6">

                                  <label for="end-date-input" class="form-label">End Date:</label>
                                  <input type="date" class="form-control bg-dark text-white" id="end-date-input" required>
                              </div>
                          </div>
                          <div class="text-center mt-3">
                              <button class="btn btn-primary" onclick="filterEntriesByDate()">Apply Filter</button>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card mr-4 p-3 mt-3">
                    <!-- Table -->
                    <div class="table-responsive tableOwn" style="max-height: 400px; overflow-y: scroll;">
                        <h1 class="text-center">Feedback admin</h1>
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        @endif

                        <table  id="entries-table" class="table">
                          <thead class="thead-dark">
                              <tr>
                                  <th>ID</th>
                                  <th>User</th>
                                  <th>X Coordinates</th>
                                  <th>Y Coordinates</th>
                                  <th>Created At</th>
                                  <th>Noise Level</th>
                                  <th>Temperature Level</th>
                                  <th>Air Quality Level</th>
                                  <th>Higge Level</th>
                                  <th>Commentary</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr id="tableBody"></tr>
       
                          </tbody>
                      </table>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<script>
/// Function to filter and display entries based on the chosen time span
function filterEntriesByDate() {
  var startDateInput = document.getElementById('start-date-input');
  var endDateInput = document.getElementById('end-date-input');
  var startDate = new Date(startDateInput.value);
  var endDate = new Date(endDateInput.value);

  // Clear the table rows and map markers
  var tableBody = document.getElementById('tableBody');
  tableBody.innerHTML = '';
  clearMapMarkers('noise-map');
  clearMapMarkers('temperature-map');
  clearMapMarkers('air-quality-map');
  clearMapMarkers('higge-map');

  // Loop through the feedback map entries
  feedbackMapEntries.forEach(function(entry) {
    // Retrieve the entry data
    var id = entry.id;
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

    // Check if the entryDate is within the specified range
    if (entryDate >= startDate && entryDate <= endDate) {
      // Create a table row for the entry
      var row = document.createElement('tr');
      row.innerHTML = `
        <td>${id}</td>
        <td>${x}</td>
        <td>${y}</td>
        <td>${noiseLevel}</td>
        <td>${temperatureLevel}</td>
        <td>${airQualityLevel}</td>
        <td>${higgeLevel}</td>
        <td>${commentary}</td>
      `;

      // Add the row to the table body
      tableBody.appendChild(row);

      // Add markers to the respective maps based on category and level
      addMarkerToMap('noise-map', 'noise', noiseLevel, x, y);
      addMarkerToMap('temperature-map', 'temperature', temperatureLevel, x, y);
      addMarkerToMap('air-quality-map', 'air-quality', airQualityLevel, x, y);
      addMarkerToMap('higge-map', 'higge', higgeLevel, x, y);
    }
  });
}

// Function to add a marker to a map based on the category and level
function addMarkerToMap(mapId, category, level, x, y) {
  var mapContainer = document.getElementById(mapId);

  // Calculate the position of the marker based on the entry coordinates
  var xPercentage = parseFloat(x).toFixed(2);
  var yPercentage = parseFloat(y).toFixed(2);
  var left = xPercentage + '%';
  var top = yPercentage + '%';

  // Create the marker element
  var marker = document.createElement('div');
  marker.classList.add('marker');
  marker.style.left = left;
  marker.style.top = top;

  // Set the marker's icon based on the level and category
  var iconClass = getIconClass(category, level);
  marker.innerHTML = `<i class="${iconClass}"></i>`;

  // Add the marker to the map container
  mapContainer.appendChild(marker);
}

// Function to clear all markers from a map
function clearMapMarkers(mapId) {
  var mapContainer = document.getElementById(mapId);
  mapContainer.innerHTML = '';
}

// Function to get the icon class based on the category and level
function getIconClass(category, level) {
  // Define the icon classes for each category and level
  var iconClasses = {
    'noise': [
      'fa-solid fa-question',
      'fa-solid fa-frown',
      'fa-solid fa-frown-open',
      'fa-solid fa-meh',
      'fa-solid fa-smile-beam',
      'fa-solid fa-grin'
    ],
    'temperature': [
      'fa-solid fa-question',
      'fa-solid fa-frown',
      'fa-solid fa-frown-open',
      'fa-solid fa-meh',
      'fa-solid fa-smile-beam',
      'fa-solid fa-grin'
    ],
    'air-quality': [
      'fa-solid fa-question',
      'fa-solid fa-frown',
      'fa-solid fa-frown-open',
      'fa-solid fa-meh',
      'fa-solid fa-smile-beam',
      'fa-solid fa-grin'
    ],
    'higge': [
      'fa-solid fa-question',
      'fa-solid fa-frown',
      'fa-solid fa-frown-open',
      'fa-solid fa-meh',
      'fa-solid fa-smile-beam',
      'fa-solid fa-grin'
    ]
  };

  // Retrieve the icon class based on the category and level
  var levelIndex = Math.min(Math.max(level, 0), 5);
  return iconClasses[category][levelIndex];
}

</script>

