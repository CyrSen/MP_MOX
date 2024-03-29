<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><span class="myoffice-text">myOffice</span>
            <span class="myoffice-x"> X</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"
            onclick="toggleNavbarBackground()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto navTrick">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                        href="{{ url('/') }}">Home</a>
                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    @auth
                        @if (Auth::check() && in_array(Auth::user()->permissions_level, ['level1', 'level2', 'level3']))
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end py-0 py-md-2" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item pt-3 pt-md-3" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                    @endauth
                @endguest

                @auth
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/feedback') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('/feedback') }}">Feedback</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/tips') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('/tips') . '/' . session('feedbackMapId') }}">Tipps</a>
                    </li>
                    @auth
                        @if (Auth::check() && in_array(Auth::user()->permissions_level, ['level2', 'level3']))
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin*') ? 'active' : '' }}"
                                    href="{{ url('/admin') }}">Report</a>
                            </li>
                        @endif
                    @endauth
                @endauth

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#contact">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
