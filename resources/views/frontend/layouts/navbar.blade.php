<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="/"><img src="{{ asset('frontend/img/logo.png') }}" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="/all-vacancies">Vacancies</a></li>
              @if(auth()->user() && auth()->user()->role == 0)
                <li><a href="/vacancies">My Jobs</a></li>
              @endif
              @if(auth()->user() && auth()->user()->role == 1)
                <li><a href="/admin/dashboard">Dashboard</a></li>
              @endif
              @if(auth()->user())
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                  </form>
                </li>
              @else
                <li><a class="ticker-btn" href="{{ route('register') }}">Signup</a></li>
                <li><a class="ticker-btn" href="{{ route('login') }}">Login</a></li>
              @endif
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
    </div>
  </header><!-- #header -->
