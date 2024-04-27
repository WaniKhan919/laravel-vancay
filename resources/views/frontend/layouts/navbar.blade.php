<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="/"><img src="{{ asset('frontend/img/logo.png') }}" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a class="ticker-btn" href="{{ route('register') }}">Signup</a></li>
              <li><a class="ticker-btn" href="{{ route('login') }}">Login</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
    </div>
  </header><!-- #header -->
