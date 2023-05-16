@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')

<script>
    // Reload the page after 1 second (1000 milliseconds)
/*     setTimeout(function() {
        location.reload();
    }, 1000); */
</script>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card mx-auto py-2 ml-4 p-2">
                <!-- Your select code here -->
                <div>
                    <select class="form-select" aria-label="Select By Question" name="" id="">
                        <option selected>Select one</option>
                        <option value="">Alle</option>
                        <option value="">Lärm</option>
                        <option value="">Temperatur</option>
                        <option value="">AirQ</option>
                        <option value="">Happiness</option>
                    </select>
                </div>
                
                <div id="image-container" class="myContainer col-xs-8">
                    <img class="img-fluid myMapImg" id="image" src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg')}}" alt="Office room plan">
                    {{-- <input type="hidden" name="noise" id="noise-input"> --}}
                    <h5>Feedback Locations</h5>

                    <input id="x-coordinates" type="hidden" name="x_coordinates">
                    <input id="y-coordinates" type="hidden" name="y_coordinates">
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card mr-4 p-3">
                <div class="table-responsive">
                    <!-- Your table code here -->
                    <h1>Feedback Administration</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>X Coordinate</th>
                                <th>Y Coordinate</th>
                                <th>Lärmempfinden</th>
                                <th>Temperaturempfinden</th>
                                <th>Raumluftqualität</th>
                                <th>Happiness</th>
                                <th>Action</th>
                                <!-- Add more table headers for other fields as needed -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedbackMaps as $feedbackMap)
                                <tr>
                                    <td>{{ $feedbackMap->id }}</td>
                                    <td>{{ $feedbackMap->user->name }}</td>
                                    <td>{{ $feedbackMap->x_coordinates }}</td>
                                    <td>{{ $feedbackMap->y_coordinates }}</td>
                                    <td>{{ $feedbackMap->noise_level }}</td>
                                    <td>{{ $feedbackMap->temperature_level }}</td>
                                    <td>{{ $feedbackMap->air_quality_level }}</td>
                                    <td>{{ $feedbackMap->higge_level }}</td>
                                    <!-- Add more table cells for other fields as needed -->
                                    <td>
                                        <!-- Delete button -->
                                        <form action="{{ route('feedback.destroy', $feedbackMap) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
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
@endsection