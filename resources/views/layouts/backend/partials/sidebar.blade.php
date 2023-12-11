<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="20">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                @if (Request::is('admin*'))
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="uil-home-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-title">Content</li>

                    <li>
                        <a href="{{ route('post.index') }}" class="waves-effect">
                            <i class="uil-window-section"></i>
                            <span>Articles</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tag.index') }}" class="waves-effect">
                            <i class="uil-window-section"></i>
                            <span>Tags</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('category.index') }}" class=" waves-effect">
                            <i class="uil-comments-alt"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                @endif
                @if (Request::is('author*'))
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="uil-home-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-title">Content</li>

                    <li>
                        <a href="{{ route('post.index') }}" class="waves-effect">
                            <i class="uil-window-section"></i>
                            <span>Articles</span>
                        </a>
                    </li>

                @endif

                {{-- <div class="">
                    <li>
                        <a href="file-manager.html" class=" waves-effect">
                            <i class="uil-comments-alt"></i>
                            <!-- <span class="badge rounded-pill bg-success float-end">New</span> -->
                            <span>File Manager</span>
                        </a>
                    </li>


                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-envelope"></i>
                            <span>Email</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read Email</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-invoice"></i>
                            <span>Invoices</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="invoices-list.html">Invoice List</a></li>
                            <li><a href="invoices-detail.html">Invoice Detail</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-book-alt"></i>
                            <span>Contacts</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="contacts-grid.html">User Grid</a></li>
                            <li><a href="contacts-list.html">User List</a></li>
                            <li><a href="contacts-profile.html">Profile</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Pages</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-user-circle"></i>
                            <span>Authentication</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-file-alt"></i>
                            <span>Utility</span>
                        </a>
                    </li>

                    <li class="menu-title">Users</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-flask"></i>
                            <span>UI Elements</span>
                        </a>
                    </li>
                    <li class="menu-title">Users</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-flask"></i>
                            <span>UI Elements</span>
                        </a>
                    </li>
                </div> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
