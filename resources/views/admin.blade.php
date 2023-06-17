    <!DOCTYPE html>
    @extends('layouts.master')

    @section('title', 'myOfficeX')

    @section('content')

    <section id="admin">
        <div class="rgba-black-strong"></div>
        <div class="container-fluid" style="margin-top:10vh;">
            <div class="row justify-content-center" style="margin-top:-10rem; margin-right:4rem; z-index:1;">
                <div class="col-md-4 mt-3">
                    <div class="card mapAdmin py-2 ml-4 p-2 d-flex align-items-center">

                            <!-- Your select code here -->
                            <div>
                                <select class="form-select" id="category-select" aria-label="Select By Category" onchange="filterEntriesByCategory(this.value)">
                                <option selected>Select one</option>
                                <option value="all">All Entries</option>
                                <option value="noise_level">Noise</option>
                                <option value="temperature_level">Temperature</option>
                                <option value="air_quality_level">Air Quality</option>
                                <option value="higge_level">Higge Level</option>
                            </select>
                            </div>
                            
                            <div>
                            <form id="filter-form">
                                <div class="mb-3">
                                <label for="start-date-input" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="start-date-input" required>
                                </div>
                                <div class="mb-3">
                                <label for="end-date-input" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="end-date-input" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </form>
                            </div>
                        
                        <div id="image-container" class="{{-- myContainer --}} col-xs-8">
                            <img class="img-fluid {{-- myMapImg --}}" id="image" src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg')}}" alt="Office room plan">
                            <input id="x-coordinates" type="hidden" name="x_coordinates">
                            <input id="y-coordinates" type="hidden" name="y_coordinates">
                        </div>
                    </div>
                </div>
        
                <div class="col-md-8">
                    <div class="card mr-4 p-3 mt-3">
                        <div class="table-responsive tableOwn" style="max-height: 400px; overflow-y: scroll;">
                            <h1 class="text-center">Feedback admin</h1>
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
        
                            <!-- table code here -->
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        {{-- <th>X Coordinate</th>
                                        <th>Y Coordinate</th> --}}
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
                                            {{-- <td>{{ $feedbackMap->x_coordinates }}</td>
                                            <td>{{ $feedbackMap->y_coordinates }}</td> --}}
                                            <td>{{ $feedbackMap->noise_level }}</td>
                                            <td>{{ $feedbackMap->temperature_level }}</td>
                                            <td>{{ $feedbackMap->air_quality_level }}</td>                  
                                            <td>{{ $feedbackMap->higge_level }}</td>
                                            <td>{{ $feedbackMap->commentary }}</td>
        
                                            <!-- Add more table cells for other fields as needed -->
                                            <td>
                                                @if (Auth::check() && Auth::user()->permissions_level === 'level3')
                                                    <!-- Delete button -->
                                                    <form action="{{ route('feedback.destroy', $feedbackMap) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#successModal">Delete</button>
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

        // Fetch the feedback map entries from the server-side
        var feedbackMapEntries = {!! json_encode($feedbackMaps) !!};
        
    </script>