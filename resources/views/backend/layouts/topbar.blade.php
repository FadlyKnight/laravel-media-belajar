
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    {{-- <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li> --}}

                    {{-- @include('backend.notification.show') --}}

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            {{-- <img src="{{ asset('logo-light.png') }}" alt="user-image" class="rounded-circle"> --}}
                            <span class="pro-user-name ml-1">
                                {{ auth()->user()->name ?? 'No Name' }} <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>

                        </div>
                    </li>

                    {{-- <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li> --}}


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    {{-- <a href="" class="logo logo-dark text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('logo.png')}}" alt="" width="150">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('logo.png')}}" alt="" width="150">
                        </span>
                    </a>
                    <a href="" class="logo logo-light text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('logo.png')}}" alt="" width="150">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('logo.png')}}" alt="" width="150">
                        </span>
                    </a> --}}
                </div>

                {{-- <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <h4 class="page-title-main">Dashboard</h4>
                    </li>
        
                </ul> --}}

            </div>
            <!-- end Topbar -->