@extends('layouts.master')

@section('content')

<section id="login">
    <div class="rgba-black-strong"></div>
        <div class="container py-5">
            <div id="{{-- animationDown --}}" class=" animate__animated animate__fadeInDown animate__delay-1s">
                <h2 class="h1 text-white mt-2 mt-md-0 pt-3 pt-md-5 pb-3 text-center">Login</h2>
                <p class="text-white px-3 px-md-5 mb-4 pb-1pb-md-3 lead text-center">
                Bitte loge dich ein, um myOffice<span class="">X</span> zu nutzen.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                <div id="{{-- animationUp --}}" class="card mb-5 animate__animated animate__fadeInUp animate__delay-1s" style="max-width: 800px;">
                    <div class="card-body p-3 pb-5 pt-5">
                <!-- Form start-->
                <div class="row justify-content-center">
                    <form class="col-11 col-md-10" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-3 py-3">
                            <label class="mb-1" for="email mb-3">{{ __('Deine User-eMail-Adresse') }}</label>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" type="email" name="email" value="{{ old('email') }}"  required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-1" for="password">{{ __('Dein Passwort') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 {{-- offset-md-4 --}}">
                                <div class="form-check my-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                        <button class="btn btn-indigo my-3" type="submit" style="color:white"><i class="fa-regular fa-paper-plane"></i></i> {{ __('Senden') }}</button>
                        <p class="pt-3">Noch keinen Account? <a href="{{ route('register') }}">{{ __('Registrieren') }}</a></p>
                        </div>

                    </form>
                </div>
                    
        <!-- Form end-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection 

  <script>
/*     document.addEventListener('DOMContentLoaded', function() {
        var element = document.getElementById('animationUp');
        element.classList.add('animate__animated', 'animate__fadeInUp');
    });

    document.addEventListener('DOMContentLoaded', function() {
        var element = document.getElementById('animationDown');
        element.classList.add('animate__animated', 'animate__fadeInDown');
    }); */
  </script>