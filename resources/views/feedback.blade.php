@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')


<div class="container-fluid">
    <div class="container card shadow-2-strong shadow px-2 mb-0 bg-body">
        <div class="row justify-content-center px-5 pt-3">
            <div class="card col-sm-12 m-2 p-3 shadow p-3 bg-body">
                <p class="h5 my-3"><strong>An dieser Stelle hast du die Möglickkeit für deinen Arbeitsplatz ein Feedback abzugeben:</strong></p>
            </div>
        </div>
    
        <div class="row justify-content-center ">
            <div class="col-sm-8">
                <div class="container-fluid">
                    <div class="row my-2">
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-1 my-3">
                                <img class="" src="./assets/img/numbers_in_circle/number_one_circle.svg" alt="number_one">
                                {{-- <i class="fa-solid fa-1 p-3"></i> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-1 my-3">
                                <img class="" src="./assets/img/numbers_in_circle/number_two_circle.svg" alt="number_two">
                                {{-- <i class="fa-solid fa-2 p-3"></i> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-1 my-3">
                                <img class="" src="./assets/img/numbers_in_circle/number_three_circle.svg" alt="number_three">
                                {{-- <i class="fa-solid fa-3 p-3"></i> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row my-0 p-2">
                                        <div class="col-sm-2 p-2">
                                            <img class="" src="./assets/img/numbers_in_circle/number_four_circle.svg" alt="number_four">
                                            {{-- <i class="fa-solid fa-4 p-3"></i> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="card">
                                <div class="container">
                                    <div class="row my-0 p-2">
                                        <div class="col-sm-2 p-2">
                                            <img class="" src="./assets/img/numbers_in_circle/number_five_circle.svg" alt="number_five">
                                            {{-- <i class="fa-solid fa-5 fa-2xl my-3 p-3"></i> --}}
                                        </div>
                                        <div class="col-sm-2 text-start p-0">
                                            <p class="feedbackQ my-3">Gesamterlebnis mitteilen:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col justify-content-evenly text-center p-3">
                                                
                                                        {{-- <i class="fa-solid fa-meh fa-2xl" data-bs-value="2"></i> --}}
                                                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_green_successreal_great.svg" alt="smiley-great" data-bs-custom-class="custom-tooltip"  data-bs-toggle="tooltip" data-bs-placement="top" title="Alles OK!"  data-bs-value="1"/>


                                                        {{-- <img class="img-fluid" src="./assets/img/Subtractsmiley-test.svg" alt="smiley-test"  data-bs-toggle="tooltip" data-bs-placement="top" title="angemessen" /> --}}
                                                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_lightgreen_nice.svg" alt="smiley-nice" data-bs-custom-class="custom-tooltip"  data-bs-toggle="tooltip" data-bs-placement="top" title="ss"  data-bs-value="2"/>
                                                        

                                                        {{-- <i class="fa-solid fa-smile fa-2xl" data-bs-toggle="tooltip" data-bs-placement="top" title="angemessen" data-bs-value="3"></i> --}}
                                                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_yellow_okay.svg" alt="smiley-ok" data-bs-custom-class="custom-tooltip"  data-bs-toggle="tooltip" data-bs-placement="top" title="Angemessen"  data-bs-value="3"/>
                                                        

                                                        {{-- <i class="fa-solid fa-grin fa-2xl" data-bs-value="4"></i> --}}
                                                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_orange_meh.svg" alt="smiley-meh" data-bs-custom-class="custom-tooltip"  data-bs-toggle="tooltip" data-bs-placement="top" title="ss"  data-bs-value="4"/>
                                                        

                                                        {{-- <i class="fa-solid fa-laugh-squint fa-2xl" data-bs-toggle="tooltip" data-bs-placement="top" title="super" data-bs-value="5"></i> --}}
                                                        
                                                        <img class="img-fluid px-3" src="./assets/img/icons_var/smiley_red_normal.svg" alt="smiley-mask" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Stinkt ubelst - hazardous!!!"  data-bs-value="5"/>
                                                       
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <div class="row justify-content-center">
                                <div class="d-flex justify-content-center mb-3">
                                    <button class="btn btn-lg btn-primary mx-sm-4" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="BEstens">Feedback geben und beenden</button>
                                    <button class="btn btn-lg btn-success ml-sm-4">Feedback geben und Tipps erhalten</button>
                                </div> 
                                  
                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-3 m-2">
                <div id="image-container" class="myContainer col-xs-8">
                    <img class="img-fluid myMapImg" id="image" src="{{ asset('assets/img/Map_Raeffel_MP_MOX_transp.svg')}}" alt="Office room plan">
                    {{-- <input type="hidden" name="noise" id="noise-input"> --}}
                  <input id="x-coordinate" type="hidden" name="x-coordinate">
                  <input id="y-coordinate" type="hidden" name="y-coordinate">
                </div>
                <div class="col-sm-3">
                    <p id="x-display"></p>
                    <p id="y-display"></p>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection