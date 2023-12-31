<header>
    <!-- Top header -->
    <div class="top-header">
      <div class="container">
        <div class="row  align-items-center">
            <div class="col-md-3">
                <div class="brand-name text-center">
                  <a href="{{ route('home') }}">
                    <h1>She Elevates</h1>
                    {{-- <span>Enter your tagline here</span> --}}
                  </a>
                </div>
              </div>
          <div class="col-md-4">
            <div class="social-links">
            </div>
          </div>

          <div class="col-md-5">
            <div class="search-wrapper">
                @guest
                    <div class="search-icon">
                    <button class="open-search-btn"><i class="fa fa-search"></i></button>
                    </div>
                @else
                    <div class="search-icon">
                        <button class="open-search-btn"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="sidebar-icon">
                        <button class="sidebar-btn"> <i class="fas fa-ellipsis-v"></i></button>
                    </div>
                @endguest
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Top header end -->
    <!-- Navbar  -->
    <div class="kavya-navbar" id="sticky-top">
      <div class="container">
        <nav class="nav-menu-wrapper">
          <span class="navbar-toggle" id="navbar-toggle">
            <i class="fas fa-bars"></i>
          </span>
          <div class="sticky-logo">
            <a href="{{ route('home') }}">
              <p>She Elevates</p>
            </a>
          </div>
        <ul class="nav-menu ml-auto mr-auto" id="nav-menu-toggle">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('categories') }}" class="nav-link">Discussions</a></li>
            <li class="nav-item drop-arrow"><a href="#" class="nav-link">Podcast</a></li>
            <li class="nav-item drop-arrow"><a href="#" class="nav-link">Events</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            @guest
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
            @else
                @if(Auth::user()->role->id == 1)
                    <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link">Dashboard</a></li>
                @endif
                @if(Auth::user()->role->id == 2)
                    <li class="nav-item"><a href="{{ route('author.dashboard') }}" class="nav-link">Dashboard</a></li>
                @endif
            @endguest
        </ul>
          <div class="sticky-search">
            <div class="search-wrapper">
            @guest
                <div class="search-icon">
                  <button class="open-search-btn"><i class="fa fa-search"></i></button>
                </div>
            @else
                <div class="search-icon">
                    <button class="open-search-btn"><i class="fa fa-search"></i></button>
                </div>
                <div class="sidebar-icon">
                    <button class="sidebar-btn"> <i class="fas fa-ellipsis-v"></i></button>
                </div>
            @endguest
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar end -->

    <!-- search overlay -->
    <div id="search-overlay" class="search-section">
      <span class="closebtn"><i class="fas fa-times"></i></span>
      <div class="overlay-content">
        <form method="GET" action="{{ route('search') }}">
          <input type="text" name="query" value="{{ isset($query) ? $query : '' }}" placeholder="Search here" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    <!-- search overlay end -->

    <div class="body-overlay"></div>
  </header>
