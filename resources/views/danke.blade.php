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
        <div class="col-lg-4 col-md-6 col-sm-8 animate__animated animate__rotateIn bg-secondary p-4 text-white">
          <!-- Content goes here -->
              <h1>Vielen Dank  <strong>{{ Auth::user()->name }}</strong> für dein Interesse und deinen Beitrag für eine bessere Arbeitsumgebung!</h1>
                <h5>Wenn du sehen willst, wie Du unmittelbar deinen Arbeitsplatz verbessern kannst, besuche die <a href="{{ url('/tips') . '/' . session('feedbackMapId') }}"><strong>Tips-Seite</strong  ></a></h5>
          </div>
      </div>
  </div>
      
  @endsection