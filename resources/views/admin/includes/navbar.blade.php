<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">

        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo width-auto">
                <a href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset(@$setting->logo) }}" class="navbar-logo width-auto" alt="{{ @$setting->site_name }}" />
                </a>
            </li>
            {{-- <li class="nav-item theme-text">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"> CORK </a>
            </li> --}}
            <li class="nav-item toggle-sidebar">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                </a>
            </li>
        </ul>

        <ul class="navbar-item flex-row navbar-dropdown search-ul">
            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </a>
                <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <img src="{{ asset('img/user.png') }}" class="img-fluid mr-2" alt="{{ auth()->user()->name }}">
                            <div class="media-body">
                                <h5>{{ auth()->user()->name }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="{{ route('admin.profile') }}">
                            <i class="far fa-user"></i> <span>My Profile</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); if(confirm('Do you really want to logout?')) {document.getElementById('logout-form').submit();}">
                            <i class="fas fa-sign-out-alt"></i> <span>Log Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
