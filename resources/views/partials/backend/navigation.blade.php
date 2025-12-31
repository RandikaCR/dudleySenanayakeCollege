<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ url('/admin') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/common/images/logo_admin_mini.png') }}" alt="" height="40">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('assets/common/images/logo_admin.png') }}" alt="" height="40">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ url('/admin') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/common/images/logo_admin_mini.png') }}" alt="" height="40">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('assets/common/images/logo_admin.png') }}" alt="" height="40">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) == '') ? 'active' : '' }}" href="{{ url('/admin') }}">
                        <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) == 'reservations') ? 'active' : '' }}" href="{{ url('/admin/reservations') }}">
                        <i class="mdi mdi-truck"></i> <span data-key="t-admin-reservations">Reservations</span>
                        @if(!empty($navReservationsCount))
                            <span class="badge badge-pill bg-danger" data-key="t-new">{{ $navReservationsCount }}</span>
                        @endif
                    </a>
                </li>

                <li class="menu-title"><span data-key="t-menu">Main Pages</span></li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarNews" data-bs-toggle="collapse" role="button" aria-expanded="{{ (request()->segment(2) == 'news') ? 'true' : 'false' }}" aria-controls="sidebarNews">
                        <i class="mdi mdi-gift"></i> <span data-key="t-raffles-main">NEWS</span>
                    </a>
                    <div class="collapse menu-dropdown {{ (request()->segment(2) == 'news') ? 'show' : '' }}" id="sidebarNews">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/admin/news') }}" class="nav-link {{ (request()->segment(2) == 'news' && request()->segment(3) == '') ? 'active' : '' }}" data-key="t-news">All News</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/news/create') }}" class="nav-link {{ (request()->segment(2) == 'news' && request()->segment(3) == 'create') ? 'active' : '' }}" data-key="t-news-add">Add New</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarEvents" data-bs-toggle="collapse" role="button" aria-expanded="{{ (request()->segment(2) == 'events') ? 'true' : 'false' }}" aria-controls="sidebarEvents">
                        <i class="mdi mdi-gift"></i> <span data-key="t-raffles-main">Events</span>
                    </a>
                    <div class="collapse menu-dropdown {{ (request()->segment(2) == 'events') ? 'show' : '' }}" id="sidebarEvents">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/admin/events') }}" class="nav-link {{ (request()->segment(2) == 'events' && request()->segment(3) == '') ? 'active' : '' }}" data-key="t-events">All Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/events/create') }}" class="nav-link {{ (request()->segment(2) == 'events' && request()->segment(3) == 'create') ? 'active' : '' }}" data-key="t-events-add">Add New</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSports" data-bs-toggle="collapse" role="button" aria-expanded="{{ (request()->segment(2) == 'sports') ? 'true' : 'false' }}" aria-controls="sidebarSports">
                        <i class="mdi mdi-gift"></i> <span data-key="t-raffles-main">Sports</span>
                    </a>
                    <div class="collapse menu-dropdown {{ (request()->segment(2) == 'sports') ? 'show' : '' }}" id="sidebarSports">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/admin/sports') }}" class="nav-link {{ (request()->segment(2) == 'sports' && request()->segment(3) == '') ? 'active' : '' }}" data-key="t-sports">All Sports</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/sports/create') }}" class="nav-link {{ (request()->segment(2) == 'sports' && request()->segment(3) == 'create') ? 'active' : '' }}" data-key="t-sports-add">Add New</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) == 'services') ? 'active' : '' }}" href="{{ url('/admin/services') }}">
                        <i class="mdi mdi-account-details"></i> <span data-key="t-services">Services</span>
                    </a>
                </li>


                <li class="menu-title"><span data-key="t-system">Page Setup</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSeniorStaff" data-bs-toggle="collapse" role="button" aria-expanded="{{ (request()->segment(2) == 'senior-staff') ? 'true' : 'false' }}" aria-controls="sidebarSeniorStaff">
                        <i class="mdi mdi-gift"></i> <span data-key="t-raffles-main">Senior Staff</span>
                    </a>
                    <div class="collapse menu-dropdown {{ (request()->segment(2) == 'senior-staff') ? 'show' : '' }}" id="sidebarSeniorStaff">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/admin/senior-staff') }}" class="nav-link {{ (request()->segment(2) == 'senior-staff' && request()->segment(3) == '') ? 'active' : '' }}" data-key="t-senior-staff">All Senior Staff</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/senior-staff/create') }}" class="nav-link {{ (request()->segment(2) == 'senior-staff' && request()->segment(3) == 'create') ? 'active' : '' }}" data-key="t-senior-staff-add">Add New</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><span data-key="t-system">Settings</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) == 'users') ? 'active' : '' }}" href="{{ url('/admin/users') }}">
                        <i class="mdi mdi-account-details"></i> <span data-key="t-users">Users</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) == 'event-categories') ? 'active' : '' }}" href="{{ url('/admin/event-categories') }}">
                        <i class="mdi mdi-account-details"></i> <span data-key="t-event-categories">Event Categories</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) == 'news-categories') ? 'active' : '' }}" href="{{ url('/admin/news-categories') }}">
                        <i class="mdi mdi-account-details"></i> <span data-key="t-news-categories">News Categories</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) == 'sport-categories') ? 'active' : '' }}" href="{{ url('/admin/sport-categories') }}">
                        <i class="mdi mdi-account-details"></i> <span data-key="t-sport-categories">Sport Categories</span>
                    </a>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
