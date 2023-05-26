@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')

<section id="indexPLACEHOLDER"> <!--*  DAMIT MAN ETWAS SIEHT !!!*/-->
    <div class="rgba-black-strong"></div>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row justify-content-center">
            <div class="col m-3 mx-auto mt-5 bg-primary p-3">
                <h2 class="lead mb-5">OFFICEX Feedback-Form</h2>
                @guest
                <h4 class="lead">Login or Register To start Survey!</h4>  
                @endguest
    
                @auth
                <div class="text-center pt-3">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/feedback') }}">
                        <button class="btn btn-lg btn-primary">
                            Umfrage Wiederholen
                        </button>
                    </a>
                </div>
                @endauth
                <div class="text-center mt-3">
                    <ul class="navbar-nav me-auto">
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                        </li>            
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        </li>
                        @endif
                        @endauth
                        @endif
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</section>


@endsection