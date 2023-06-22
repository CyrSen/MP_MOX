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
                        <div id="mapNoise" class="myContainer mapAdmin tooltip-icon">
                            <img class="img-fluid mapFeedback" id="imgNoise"
                                src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg') }}" alt="Office room plan">
                                <input id="x-coordinates" type="hidden" name="x_coordinates">
                                <input id="y-coordinates" type="hidden" name="y_coordinates">
                        </div>
                    </div>
                </div>
                <div class="col-3 px-0">
                    <div class="card mapAdmin py-2 ml-4 d-flex align-items-center">
                        <!-- Map for temperature_level -->
                        <p class="lead text-center">Temperature</p>
                        <div id="mapTemperature" class="myContainer mapAdmin tooltip-icon">
                            <img class="img-fluid mapFeedback" id="imgTemperature"
                                src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg') }}" alt="Office room plan">
                                <input id="x-coordinates" type="hidden" name="x_coordinates">
                                <input id="y-coordinates" type="hidden" name="y_coordinates">
                        </div>
                    </div>
                </div>
                <div class="col-3 px-0">
                    <div class="card mapAdmin py-2 ml-4 d-flex align-items-center">
                        <!-- Map for air_quality_level -->
                        <p class="lead text-center">Air Quality</p>
                        <div id="mapAirQuality" class="myContainer mapAdmin tooltip-icon">
                            <img class="img-fluid mapFeedback" id="imgAirQuality"
                                src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg') }}" alt="Office room plan">
                                <input id="x-coordinates" type="hidden" name="x_coordinates">
                                <input id="y-coordinates" type="hidden" name="y_coordinates">
                        </div>
                    </div>
                </div>
                <div class="col-3 px-0">
                    <div class="card mapAdmin py-2 ml-4 d-flex align-items-center">
                        <!-- Map for higge_level -->
                        <p class="lead text-center">Higge</p>
                        <div id="mapHigge" class="myContainer mapAdmin tooltip-icon">
                            <img class="img-fluid mapFeedback" id="imgHigge"
                                src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg') }}" alt="Office room plan">
                                <input id="x-coordinates" type="hidden" name="x_coordinates">
                                <input id="y-coordinates" type="hidden" name="y_coordinates">
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
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
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
                                            <td>
                                                @if (Auth::check() && Auth::user()->permissions_level === 'level3')
                                                    <!-- Delete button -->
                                                    <form action="{{ route('feedback.destroy', $feedbackMap) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            data-bs-toggle="modal" data-bs-target="#successModal">
                                                            Delete
                                                        </button>
                                                    </form>
                                                @endif
                                            </td>
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

  var mapNoiseContainer = document.getElementById('mapNoise');
var mapTemperatureContainer = document.getElementById('mapTemperature');
var mapAirQualityContainer = document.getElementById('mapAirQuality');
var mapHiggeContainer = document.getElementById('mapHigge');

  // Clear the img elements
  imgNoise.innerHTML = '';
  imgTemperature.innerHTML = '';
  imgAirQuality.innerHTML = '';
  imgHigge.innerHTML = '';

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
      var createIcon = function(level, x, y) {
        var icon = document.createElement('i');
        icon.classList.add('fa', 'fa-solid');

        // Set the emoji based on the level
        switch (level) {
          case '1':
            icon.classList.add('fa-frown', 'frownie');
            break;
          case '2':
            icon.classList.add('fa-meh', 'mehie');
            break;
          case '3':
            icon.classList.add('fa-smile', 'smile');
            break;
          case '4':
            icon.classList.add('fa-grin', 'grin');
            break;
          case '5':
            icon.classList.add('fa-laugh-squint', 'lol');
            break;
          default:
            icon.classList.add('fa-comment-medical', 'comment-medical');
            break;
        }
        
        icon.classList.add('tooltip-icon');
        // Set the position and z-index of the icon
        icon.style.position = 'absolute';
        icon.style.left = x;
        icon.style.top = y;
        icon.style.zIndex = '10';

        return icon;
      };

// Add the icons after the image containers
mapNoiseContainer.appendChild(createIcon(noiseLevel, '30.4469%', '25.5046%'));
mapTemperatureContainer.appendChild(createIcon(temperatureLevel, 'x-coordinate', 'y-coordinate'));
mapAirQualityContainer.appendChild(createIcon(airQualityLevel, 'x-coordinate', 'y-coordinate'));
mapHiggeContainer.appendChild(createIcon(higgeLevel, 'x-coordinate', 'y-coordinate'));

    } else {
      row.style.display = 'none';
    }
  });
}


$(function(){
  $('[data-bs-toggle="tooltip"]').tooltip();
  
});

$(function(){
  $('[data-bs-toggle="popover"]').popover({html:true})
   
});

</script>
