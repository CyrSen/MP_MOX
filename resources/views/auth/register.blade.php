@extends('layouts.app')

@section('content')

<section id="register">
    <div class="rgba-black-strong"></div>
        <div class="container py-5">
            <div class="wow fadeIn">
                <h2 class="h1 text-white pt-5 pb-3 text-center">Registrierung</h2>
                <p class="text-white px-5 mb-5 pb-3 lead text-center">
                Die Nutzung von myOfficeX ist anonym. <br> Es werden keine persönlichen Daten von dir erhoben oder gespeichert.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                <div class="card mb-5 animate__animated animate__fadeInUp" data-wow-delay=".4s" style="max-width: 800px;">
                    <div class="card-body p-5">
                <!-- Form start-->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="">{{ __('Benutzername') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="">{{ __('Email-Adresse*') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="">{{ __('Passwort') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="">{{ __('Passwort bestätigen') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group">
                            {{-- <label for="onetimer" class="col-md-4 col-form-label text-md-end">{{ __('Office-Code') }}</label> --}}
                            <label for="office-code">{{ __('Office-Code') }}
                                <i class="fa fa-info-circle" data-toggle="popover" data-placement="right" data-content="Der Office Code identifiziert das Büro und ermöglicht nur autorisierten Benutzern den Zugriff auf die App. Bitte schreibe uns über das Kontaktformular, falls du deinen Office-Code nicht kennst."></i>
                            </label>                             
                            <input id="office-code" type="password" class="form-control @error('onetimer') is-invalid @enderror" name="onetimer" required autocomplete="off">
                            @error('onetimer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary mt-5"><i class="fa fa-paper-plane-o mr-2"></i>
                                    {{ __('Senden') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
