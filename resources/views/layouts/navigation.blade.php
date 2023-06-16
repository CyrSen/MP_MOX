<nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}"><span class="myoffice-text">myOffice</span><span class="myoffice-x"> X</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ml-auto navTrick">


        {{-- @auth --}}
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        {{-- @endauth --}}
        

        <!-- Authentication Links -->
        @guest
        
          @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @endif
          @auth
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
        @endauth
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        @endguest


        {{-- @auth --}}
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('/feedback')) ? 'active' : '' }}" aria-current="page" href="{{ url('/feedback') }}">Feedback</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ (request()->is('/tips')) ? 'active' : '' }}" aria-current="page" href="{{ url('/tips') . '/' . session('feedbackMapId') }}">Tips</a>
        </li>
        {{-- @auth --}}
        @if (Auth::check() && in_array(Auth::user()->permissions_level, ['level2', 'level3']))
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('admin*')) ? 'active' : '' }}" href="{{ url('/admin') }}">Administration</a>
        </li>
        @endif
        {{-- @endauth --}}
        
        {{-- @endauth --}}


        <li class="nav-item">
          <a class="nav-link" href="#contact">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
