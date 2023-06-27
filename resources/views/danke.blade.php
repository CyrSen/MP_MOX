  @extends('layouts.master')

  @section('title', 'myOfficeX')

  @section('content')

  <div class="container" 
  style="
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-size: 100% 100%;
  position: relative;
  min-width: 100vw;
  background-image: url('{{ asset('assets/img/panorama-3094696_1920.jpg') }}');">
  
      <div class="rgba-black-strong" style="z-index:0"></div>
          <div class="vh-100 d-flex justify-content-center align-items-center">
              <div class="col-lg-4 col-md-6 col-sm-8 animate__animated animate__rotateIn bg-secondary p-4 text-white">
                  <!-- Content goes here -->
                  <div class="row justify-content-center">
                    <img class="img-fluid rounded mb-3 d-flex align-items-center justify-content-end" src="{{ asset('assets/img/office_happy_one.png') }}" alt="Emoji suffering from bad air" style="width: 80%;">
                  </div>
              

                  <h1 class="text-center">Vielen Dank
                      @if (Auth::check() && Auth::user()->name)
                          <strong>{{ Auth::user()->name }}</strong>
                      @endif
                      !
                  </h1>
                  <h5 class="text-center">Dein Feedback wurde weitergeleitet.
                      <a href="{{ url('/tips') . '/' . session('feedbackMapId') }}" style="display:none;">
                          <strong>Tips-Seite</strong>
                      </a>
                  </h5>
              </div>
          </div>
      </div>

  @endsection
