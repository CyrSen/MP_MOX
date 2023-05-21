<!DOCTYPE html>
@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mapAdmin py-2 ml-4 p-2 d-flex align-items-center">
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

                

                
                <div id="image-container" class="{{-- myContainer --}} col-xs-8">
                    <img class="img-fluid {{-- myMapImg --}}" id="image" src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg')}}" alt="Office room plan">
                    <input id="x-coordinates" type="hidden" name="x_coordinates">
                    <input id="y-coordinates" type="hidden" name="y_coordinates">
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mr-4 p-3">
                <div class="table-responsive">
                    <!-- table code here -->
                    <h1 class="text-center">Feedback Administration</h1>
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    
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
                                <th>Commentary</th>
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
                                    <td>{{ $feedbackMap->commentary }}</td>

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


<script>

    // Fetch the feedback map entries from the server-side
    var feedbackMapEntries = {!! json_encode($feedbackMaps) !!};
    
</script>