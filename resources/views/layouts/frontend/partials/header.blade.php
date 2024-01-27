<main class="kavya-home-2">
    <header>
        <nav>
            <div id="sticky-top-sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 57px;">
                <div class="kavya-navbar-2 kavya-navbar sticky-header" id="sticky-top"
                    style="width: 1440px; position: fixed; top: 0px; z-index: inherit;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col order-2 col-lg-2 ">
                                <div class="brand-name">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('client/images/logo.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col col-lg-8 order-1 order-lg-2">
                                <span class="navbar-toggle" id="navbar-toggle">
                                    <i class="fas fa-bars"></i>
                                </span>
                                <ul class="nav-menu ml-auto mr-auto" id="nav-menu-toggle">
                                    <li class="nav-item"><a href="{{ route('categories') }}" class="nav-link">Discussions</a></li>
                                    <li class="nav-item drop-arrow"><a href="#" class="nav-link">Podcast</a></li>
                                    <li class="nav-item drop-arrow"><a href="#" class="nav-link">Events</a></li>
                                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                    @guest
                                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                                    @else
                                        @if(Auth::user()->role == 'admin')
                                            <li class="nav-item"><a href="#" class="nav-link">{{ Auth::user()->name }} <span class="arrow-icon"> <span class="left-bar"></span>
                                                <span class="right-bar"></span></span>
                                                </a>
                                                <ul class="drop-menu">
                                                    <li class="drop-menu-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                    <li class="drop-menu-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                    <form id="logout-form" style="display: hidden;" action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </li>
                                        @endif
                                        @if(Auth::user()->role == 'author')
                                            <li class="nav-item"><a href="#" class="nav-link">{{ Auth::user()->name }} <span class="arrow-icon"> <span class="left-bar"></span>
                                                <span class="right-bar"></span></span>
                                                </a>
                                                <ul class="drop-menu">
                                                    <li class="drop-menu-item"><a href="{{ route('author.dashboard') }}">Dashboard</a></li>
                                                    <li class="drop-menu-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                    <form id="logout-form" style="display: hidden;" action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </li>
                                        @endif
                                        @if(Auth::user()->role == 'user')
                                        <li class="nav-item"><a href="#" class="nav-link">{{ Auth::user()->name }} <span class="arrow-icon"> <span class="left-bar"></span>
                                            <span class="right-bar"></span></span>
                                            </a>
                                            <ul class="drop-menu">
                                                <li class="drop-menu-item"><a href="#">Profile</a></li>
                                                <li class="drop-menu-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                <form id="logout-form" style="display: hidden;" action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                        @endif
                                    @endguest
                                </ul>
                            </div>
                            <div class="col col-lg-2 order-3">
                                <div class="search-wrapper">
                                    <div class="search-icon">
                                        <button class="open-search-btn"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

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


</main>
