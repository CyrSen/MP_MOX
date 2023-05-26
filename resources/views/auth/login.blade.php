@extends('layouts.master')

@section('content')

<section id="login">
    <div class="rgba-black-strong"></div>
        <div class="container py-5">
            <div class="wow fadeIn">
                <h2 class="h1 text-white pt-5 pb-3 text-center">Login</h2>
                <p class="text-white px-5 mb-5 pb-3 lead text-center">
                Bitte loge dich ein, um myOfficeX zu nutzen.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                <div class="card mb-5  animate__animated animate__fadeInUp" data-wow-delay=".4s" style="max-width: 800px;">
                    <div class="card-body p-5">
                <!-- Form start-->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('Deine User-eMail-Adresse') }}</label>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" type="email" name="email" value="{{ old('email') }}"  required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Dein Passwort') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                        <button class="btn btn-primary{{-- btn-indigo --}} mb-3 mt-3" type="submit"><i class="fa-regular fa-paper-plane"></i></i> {{ __('Senden') }}</button>
                        <p>Noch keinen Account? <a href="{{ route('register') }}">{{ __('Registrieren') }}</a></p>
                        </div>
                    </form>
        <!-- Form end-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection 