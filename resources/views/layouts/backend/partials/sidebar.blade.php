<div class="sidebar" data-color="rose" data-background-color="black" data-image="https://demos.creative-tim.com/material-dashboard-pro-bs4/assets/img/sidebar-1.jpg">
    <div class="logo">
       <a href="http://www.creative-tim.com/" class="simple-text logo-normal text-center">
       She Elivate
       </a>
    </div>
    <div class="sidebar-wrapper">
       <div class="user">
          <div class="photo">
             <img src="https://demos.creative-tim.com/material-dashboard-pro-bs4/assets/img/faces/avatar.jpg" />
          </div>
          <div class="user-info">
             <a data-toggle="collapse" href="#collapseExample" class="username">
             <span>
                {{ Auth::user()->name }}
             <b class="caret"></b>
             </span>
             </a>
             <div class="collapse" id="collapseExample">
                <ul class="nav">
                   <li class="nav-item">
                      <a class="nav-link" href="#">
                      <span class="sidebar-mini"> MP </span>
                      <span class="sidebar-normal"> My Profile </span>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="#">
                      <span class="sidebar-mini"> EP </span>
                      <span class="sidebar-normal"> Edit Profile </span>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="#">
                      <span class="sidebar-mini"> S </span>
                      <span class="sidebar-normal"> Settings </span>
                      </a>
                   </li>
                </ul>
             </div>
          </div>
       </div>
       <ul class="nav">
            @if(Request::is('admin*'))
                <li class="nav-item  {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/tag') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('tag.index') }}">
                        <i class="material-icons">image</i>
                        <p>Tags</p>
                    </a>
                </li>
            @endif
            </ul>

    </div>
    <div class="sidebar-background"></div>
 </div>
