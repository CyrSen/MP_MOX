@extends('layouts.master')

@section('content')

    <section id="register">
        <div class="rgba-black-strong"></div>
        <div class="container py-5">
            <div id="{{-- animationDownReg --}}" class=" animate__animated animate__fadeInDown animate__delay-1s">
                <h2 class="h1 text-white mt-2 mt-md-0 pt-3 pt-md-5 pb-3 text-center">Registrierung</h2>
                <p class="text-white px-3 px-md-5 mb-4 pb-1pb-md-3 lead text-center">
                    Die Nutzung von myOfficeX ist anonym.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div id="{{-- animationUpReg --}}" class="card mb-5 animate__animated animate__fadeInUp animate__delay-1s"
                        style="max-width: 800px;">
                        <div class="card-body p-3 py-5 pb-3">
                            <!-- Form start-->
                            <div class="row justify-content-center">
                                <form class="col-11 col-md-10" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group py-2">
                                        <label class="mb-1" for="name" class="">{{ __('Benutzername') }}</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- ORIGINAL EMAIL REQUIRED FRONTEND , DATABASE REQUIRES EMAIL AS NONE NOT NULL--}}
                                    {{-- <div class="form-group py-2">
                                        <label class="mb-1" for="email"
                                            class="">{{ __('Email-Adresse*') }}</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}
                                    {{-- OPTIONAL EMAIL FRONTEND, DATABASE REQUIRES EMAIL AS NULL NOT NONE --}}
                                    <div class="form-group py-2">
                                        <label class="mb-1" for="email">{{ __('Email-Adresse') }} (optional
                                            <i class="fa fa-info-circle tooltip-icon" data-bs-toggle="popover"
                                            data-bs-placement="right"
                                            data-bs-content="Personen, die Zugriff auf den Report erhalten sollen, melden sich entweder beim Setup oder  nachträglich 
                                            per <a href='http://localhost/#contact'>Kontaktformular</a>, um den nötigen Zugriff abzuklären und zu autorisieren."></i>
                                        )</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    

                                    <div class="form-group py-2">
                                        <label class="mb-1" for="password" class="">{{ __('Passwort') }}</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group py-2">
                                        <label class="mb-1" for="password-confirm"
                                            class="">{{ __('Passwort bestätigen') }}</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <div class="form-group pt-2 mb-4">
                                        <label class="mb-1" for="office-code">{{ __('Office-Code') }}
                                            <i class="fa fa-info-circle tooltip-icon" data-bs-toggle="popover"
                                                data-bs-placement="right"
                                                data-bs-content="Der Office Code identifiziert das Büro und ermöglicht nur autorisierten Benutzern den Zugriff auf die App. 
                                Bitte schreibe uns über das <a href='http://localhost/#contact'>Kontaktformular</a>, falls du deinen Office-Code nicht kennst."></i>
                                        </label>
                                        <input id="office-code" type="password"
                                            class="form-control @error('onetimer') is-invalid @enderror" name="onetimer"
                                            required autocomplete="off">
                                        @error('onetimer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="row mb-0 text-center">
                                        <div class="">
                                            <button type="submit" class="btn btn-indigo mt-2 mb-0" style="color:white"><i
                                                    class="fa fa-paper-plane-o mr-2"></i>
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

<script>
    /*     document.addEventListener('DOMContentLoaded', function() {
        var element = document.getElementById('animationUpReg');
        element.classList.add('animate__animated', 'animate__fadeInUp');
    });

    document.addEventListener('DOMContentLoaded', function() {
        var element = document.getElementById('animationDownReg');
        element.classList.add('animate__animated', 'animate__fadeInDown');
    }); */
</script>
