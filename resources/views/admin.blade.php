<!DOCTYPE html>
@extends('layouts.master')

@section('title', 'myOfficeX')

@section('content')

    <section id="admin" class="">
        <div class="rgba-black-strong"></div>
        <div class="container-fluid mt-4 mt-md-0">
            <div class="row justify-content-evenly mt-0 mt-md-4">
                <!-- Map Views -->
                <div class="col-sm-12 col-md-3 px-0">
                    <div class="card mx-3 py-2 ml-4 d-flex align-items-center mb-2 mb-md-0">
                        <!-- Map for temperature_level -->
                        <p class="lead text-center">Temperatur-Komfort</p>
                        <div id="mapTemperature" class="myContainer mapAdmin tooltip-icon">
                            <img class="img-fluid" id="imgTemperature"
                                src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}" alt="Office room plan">
                            <input id="x-coordinates-temperature" type="hidden" name="x_coordinates">
                            <input id="y-coordinates-temperature" type="hidden" name="y_coordinates">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 px-0">
                    <div class="card mx-3 py-2 ml-4 d-flex align-items-center mb-2 mb-md-0">
                        <!-- Map for noise_level -->
                        <p class="lead text-center">Geräusch-Komfort</p>
                        <div id="mapNoise" class="myContainer mapAdmin tooltip-icon">
                            <img class="img-fluid" id="imgNoise" src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}"
                                alt="Office room plan">
                            <input id="x-coordinates-noise" type="hidden" name="x_coordinates">
                            <input id="y-coordinates-noise" type="hidden" name="y_coordinates">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 px-0">
                    <div class="card mx-3 py-2 ml-4 d-flex align-items-center mb-2 mb-md-0">
                        <!-- Map for air_quality_level -->
                        <p class="lead text-center">Luft-Komfort</p>
                        <div id="mapAirQuality" class="myContainer mapAdmin tooltip-icon">
                            <img class="img-fluid" id="imgAirQuality"
                                src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}" alt="Office room plan">
                            <input id="x-coordinates-air-quality" type="hidden" name="x_coordinates">
                            <input id="y-coordinates-air-quality" type="hidden" name="y_coordinates">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 px-0">
                    <div class="card mx-3 py-2 ml-4 d-flex align-items-center mb-2 mb-md-0">
                        <!-- Map for higge_level -->
                        <p class="lead text-center">Gesamt-Komfort {{-- (Higge) --}}</p>
                        <div id="mapHigge" class="myContainer mapAdmin tooltip-icon">
                            <img class="img-fluid" id="imgHigge" src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}"
                                alt="Office room plan">
                            <input id="x-coordinates-higge" type="hidden" name="x_coordinates">
                            <input id="y-coordinates-higge" type="hidden" name="y_coordinates">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filter and Table -->
            <div class="row mt-3 mx-2 mx-md-0">
                <div class="col-sm-12 col-md-3 px-0">

                    <!-- Filter/Select Div -->
                    <div class="row justify-content-center">
                        <div class="card col-sm-10 mt-3 px-4 px-md-2 text-center">
                            <label class="form-label mt-2 mb-0 pt-2  text-center" for="">
                                <p class="lead mx-3">Zeitspanne angeben</p>
                            </label>
                            <div class="row justify-content-center px-4 px-md-0">
                                <div class="col-sm-3 col-md-5">
                                    <label for="start-date-input" class="form-label">Startdatum:</label>
                                    <input type="date" class="col-sm-3 form-control bg-dark text-white mb-3 mb-md-0 px-1" id="start-date-input"
                                        required>
                                </div>
                                <div class="col-sm-3 col-md-5">
                                    <label for="end-date-input" class="form-label">Enddatum:</label>
                                    <input type="date" class="form-control bg-dark text-white px-1" id="end-date-input"
                                        required>
                                </div>
                            </div>
                            <div class="text-center mt-3 mb-3 mb-md-2">
                                <button class="btn btn-indigo text-white" onclick="filterEntriesByDate()">Filter anwenden</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-9 mt-0 px-0">
                    <div class="card p-3 mt-3">
                        <!-- Table -->
                        <div class="table-responsive tableOwn" style="max-height: 400px; overflow-y: scroll;">
                            <h3 class="card-title text-center">Alle Feedbacks.</h3>
                            
                            <p class="small text-center pt-0">Zum Aktualisieren bitte Synch-Button drücken</p>

                            <p class="text-center">
                                <a href="{{ url('/admin') }}" class="btn btn-reload reloadAdmin mt-0 mb-2 p-1"
                                    id="refresh-button" class="refresh-end" onclick="refreshContent()">
                                    <i class="fa fa-sync fa-spin-hover fa-3x" data-bs-custom-class="tooltip" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Synch Now"></i>
                                </a>
                            </p>

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
                                        <th>Zeitstempel</th>
                                        <th style="display:none;">x-coordinates</th>
                                        <th style="display:none;">y-coordinates</th>
                                        <th>Temperatur-Komfort</th>
                                        <th>Geräusch-Komfort</th>
                                        <th>Luft-Komfort</th>
                                        <th>Gesamt-Komfort</th>
                                        <th>Kommentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feedbackMaps as $feedbackMap)
                                        <tr>
                                            <td>{{ $feedbackMap->created_at }}</td>
                                            <td style="display:none;">{{ $feedbackMap->x_coordinates }}</td>
                                            <td style="display:none;">{{ $feedbackMap->y_coordinates }}</td>
                                            <td>{{ $feedbackMap->temperature_level }}</td>
                                            <td>{{ $feedbackMap->noise_level }}</td>
                                            <td>{{ $feedbackMap->air_quality_level }}</td>
                                            <td>{{ $feedbackMap->higge_level }}</td>
                                            <td>{{ $feedbackMap->commentary }}</td>
                                            <td>
                                                @if (Auth::check() && Auth::user()->permissions_level === 'level3')
                                                    <!-- Delete button -->
                                                    <form action="{{ route('feedback.destroy', $feedbackMap) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger text-white"
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

        // Clear the previous icons from the map
        mapNoiseContainer.innerHTML = '';
        mapTemperatureContainer.innerHTML = '';
        mapAirQualityContainer.innerHTML = '';
        mapHiggeContainer.innerHTML = '';

        // Insert the map images back into the map containers
        mapNoiseContainer.innerHTML =
            '<img class="img-fluid" id="imgNoise" src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}" alt="Office room plan"><input id="x-coordinates-noise" type="hidden" name="x_coordinates"><input id="y-coordinates-noise" type="hidden" name="y_coordinates">';
        mapTemperatureContainer.innerHTML =
            '<img class="img-fluid" id="imgTemperature" src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}" alt="Office room plan"><input id="x-coordinates-temperature" type="hidden" name="x_coordinates"><input id="y-coordinates-temperature" type="hidden" name="y_coordinates">';
        mapAirQualityContainer.innerHTML =
            '<img class="img-fluid" id="imgAirQuality" src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}" alt="Office room plan"><input id="x-coordinates-air-quality" type="hidden" name="x_coordinates"><input id="y-coordinates-air-quality" type="hidden" name="y_coordinates">';
        mapHiggeContainer.innerHTML =
            '<img class="img-fluid" id="imgHigge" src="{{ asset('assets/img/Raeffel_Legendincl_new.svg') }}" alt="Office room plan"><input id="x-coordinates-higge" type="hidden" name="x_coordinates"><input id="y-coordinates-higge" type="hidden" name="y_coordinates">';

        // Loop through each row in the table and check if it falls within the specified date range
        rows.forEach(function(row) {
            var dateCell = row.querySelector('td:first-child');
            var rowDate = new Date(dateCell.textContent);

            if (rowDate >= startDate && rowDate <= endDate) {
                row.style.display = 'table-row';

                // Get the values from the row
                var xCoordinates = row.querySelector('td:nth-child(2)').textContent;
                var yCoordinates = row.querySelector('td:nth-child(3)').textContent;
                var temperatureLevel = row.querySelector('td:nth-child(4)').textContent;
                var noiseLevel = row.querySelector('td:nth-child(5)').textContent;
                var airQualityLevel = row.querySelector('td:nth-child(6)').textContent;
                var higgeLevel = row.querySelector('td:nth-child(7)').textContent;

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
                            icon.classList.add('fa-frown-open', 'frownopen');
                            break;
                        case '3':
                            icon.classList.add('fa-meh', 'mehie');
                            break;
                        case '4':
                            icon.classList.add('fa-face-laugh', 'laugh');
                            break;
                        case '5':
                            icon.classList.add('fa-laugh-squint', 'squint');
                            break;
                        case '6':
                            icon.classList.add('fa-temperature-low', 'templow');
                            break;
                        case '7':
                            icon.classList.add('fa-laugh-squint', 'temphigh');
                            break;
                            
                        default:
                            icon.classList.add('fa-comment-medical', 'comment-medical');
                            break;
                    }

                    icon.classList.add('adminView');
                    icon.classList.add('tooltip-icon');
                    // Set the position and z-index of the icon
                    icon.style.position = 'absolute';
                    icon.style.left = xCoordinates +
                        '%'; // Use xCoordinates variable instead of 'x-coordinates'
                    icon.style.top = yCoordinates +
                        '%'; // Use yCoordinates variable instead of 'y-coordinates'
                    icon.style.zIndex = '10';

                    return icon;
                };

                // Add the icons after the image containers
                mapNoiseContainer.appendChild(createIcon(noiseLevel, xCoordinates, yCoordinates));
                mapTemperatureContainer.appendChild(createIcon(temperatureLevel, xCoordinates, yCoordinates));
                mapAirQualityContainer.appendChild(createIcon(airQualityLevel, xCoordinates, yCoordinates));
                mapHiggeContainer.appendChild(createIcon(higgeLevel, xCoordinates, yCoordinates));
            } else {
                row.style.display = 'none';
            }
        });
    }

    $(function() {
        $('[data-bs-toggle="tooltip"]').tooltip();

    });

    $(function() {
        $('[data-bs-toggle="popover"]').popover({
            html: true
        })

    });

    
</script>
