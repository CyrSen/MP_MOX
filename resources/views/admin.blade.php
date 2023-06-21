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
                        <!-- Map for noise_level -->
                        <p class="lead text-center">Lärmempfinden</p>
                      <!-- Map for noise_level -->
                        <div id="mapNoise" class="map-container mapAdmin tooltip-icon">
                          <img class="img-fluid mapFeedback" id="imageNoise" src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg') }}" alt="Office room plan">
                          <input id="x-coordinates" type="hidden" name="x_coordinates" />
                          <input id="y-coordinates" type="hidden" name="y_coordinates" />
                        </div>
                    </div>
                </div>
                <div class="col-3 px-0">
                    <div class="card mapAdmin py-2 ml-4 d-flex align-items-center">
                        <!-- Map for temperature_level -->
                        <p class="lead text-center">Temperature</p>
                        <!-- Map for temperature_level -->
                      <div id="mapTemperature" class="map-container mapAdmin tooltip-icon">
                        <img class="img-fluid mapFeedback" id="imageTemperature" src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg') }}" alt="Office room plan">
                        <input id="x-coordinates" type="hidden" name="x_coordinates" />
                        <input id="y-coordinates" type="hidden" name="y_coordinates" />
                      </div>
                    </div>
                </div>
                <div class="col-3 px-0">
                    <div class="card mapAdmin py-2 ml-4 d-flex align-items-center">
                        <!-- Map for air_quality_level -->
                        <p class="lead text-center"></p>
                      <!-- Map for air_quality_level -->
                        <div id="mapAirQuality" class="map-container mapAdmin tooltip-icon">
                          <img class="img-fluid mapFeedback" id="imageAirQuality" src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg') }}" alt="Office room plan">
                          <input id="x-coordinates" type="hidden" name="x_coordinates" />
                          <input id="y-coordinates" type="hidden" name="y_coordinates" />
                        </div>        
                    </div>
                </div>
                <div class="col-3 px-0">
                    <div class="card mapAdmin py-2 ml-4 d-flex align-items-center">
                      <!-- Map for higge_level -->
                      <p class="lead text-center">Higge</p>
                        <!-- Map for higge_level -->
                        <div id="mapHigge" class="map-container mapAdmin tooltip-icon">
                          <img class="img-fluid mapFeedback" id="imageHigge" src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg') }}" alt="Office room plan">
                          <input id="x-coordinates" type="hidden" name="x_coordinates" />
                          <input id="y-coordinates" type="hidden" name="y_coordinates" />
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
                                        <input type="date" class="form-control bg-dark text-white" id="start-date-input"
                                            required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="end-date-input" class="form-label">End Date:</label>
                                        <input type="date" class="form-control bg-dark text-white" id="end-date-input"
                                            required>
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
                            <!-- Table to display filtered data -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        {{-- <th>x-coordinates</th>
                                        <th>y-coordinates</th> --}}
                                        <th>Noise Level</th>
                                        <th>Temperature Level</th>
                                        <th>Air Quality Level</th>
                                        <th>Higge Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($feedbackMaps as $feedbackMap)
                                  <tr>
                                      <td>{{ $feedbackMap->created_at }}</td>
                                      {{-- <td>{{ $feedbackMap->x_coordinates }}</td>
                                      <td>{{ $feedbackMap->y_coordinates }}</td> --}}
                                      <td>{{ $feedbackMap->noise_level }}</td>
                                      <td>{{ $feedbackMap->temperature_level }}</td>
                                      <td>{{ $feedbackMap->air_quality_level }}</td>
                                      <td>{{ $feedbackMap->higge_level }}</td>
                                  </tr>
                                  @endforeach
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
function filterEntriesByDate() {
  // Get the start and end dates from the input fields
  var startDateInput = document.getElementById('start-date-input');
  var endDateInput = document.getElementById('end-date-input');
  var startDate = new Date(startDateInput.value);
  var endDate = new Date(endDateInput.value);

  // Get the table body element
  var tableBody = document.querySelector('.tableOwn tbody');

  // Get all rows from the table body
  var rows = tableBody.querySelectorAll('tr');

  // Get the map containers
  var mapNoise = document.getElementById('mapNoise');
  var mapTemperature = document.getElementById('mapTemperature');
  var mapAirQuality = document.getElementById('mapAirQuality');
  var mapHigge = document.getElementById('mapHigge');

  // Clear the map containers
  mapNoise.innerHTML = '';
  mapTemperature.innerHTML = '';
  mapAirQuality.innerHTML = '';
  mapHigge.innerHTML = '';

  // Loop through each row in the table and check if it falls within the specified date range
  rows.forEach(function(row) {
    var dateCell = row.querySelector('td:first-child');
    var rowDate = new Date(dateCell.textContent);

    if (rowDate >= startDate && rowDate <= endDate) {
      row.style.display = 'table-row';

      // Get the values from the row
      var noiseLevel = row.querySelector('td:nth-child(2)').textContent;
      var temperatureLevel = row.querySelector('td:nth-child(3)').textContent;
      var airQualityLevel = row.querySelector('td:nth-child(4)').textContent;
      var higgeLevel = row.querySelector('td:nth-child(5)').textContent;

      // Create an icon element
      var createIcon = function (level) {
        var icon = document.createElement('span');
        icon.classList.add('icon');

        // Set the emoji based on the level
        switch (level) {
          case '1':
            icon.classList.add('fa', 'fa-frown');
            break;
          case '2':
            icon.classList.add('fa', 'fa-meh');
            break;
          case '3':
            icon.classList.add('fa', 'fa-smile');
            break;
          case '4':
            icon.classList.add('fa', 'fa-grin');
            break;
          case '5':
            icon.classList.add('fa', 'fa-laugh-squint');
            break;
          default:
            icon.classList.add('fa', 'fa-comment-medical');
            break;
        }

        return icon;
      };

      // Add the icons to the map containers
      mapNoise.appendChild(createIcon(noiseLevel));
      mapTemperature.appendChild(createIcon(temperatureLevel));
      mapAirQuality.appendChild(createIcon(airQualityLevel));
      mapHigge.appendChild(createIcon(higgeLevel));
    } else {
      row.style.display = 'none';
    }
  });
}



</script>
