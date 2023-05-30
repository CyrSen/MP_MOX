  @extends('layouts.master')

  @section('title', 'myOfficeX')

  @section('content')


  <div class="container" style="
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-size: 100% 100%;
  position: relative;
  min-width: 100vw;
  background-image: url('{{ asset('assets/img/panorama-3094696_1920.jpg') }}');">
  <div class="rgba-black-strong"></div>
      <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="col-lg-4 col-md-6 col-sm-8 animate__animated animate__rotateIn bg-secondary p-3">
          <!-- Content goes here -->
              <h1>Dear <strong>{{ Auth::user()->name }}</strong>, danke very much for improving our work-environment!</h1>
                <p>This column is centered both horizontally and vertically on the screen.</p>
          </div>
      </div>
  </div>
      
  @endsection