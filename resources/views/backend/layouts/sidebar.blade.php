
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="{{ asset('logo-light.png')}}" alt="user-img" title="Mat Helme" class="avatar-md">
                        <div class="dropdown">
                            <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"  aria-expanded="false">Vira Media Belajar</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock mr-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">Admin Head</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-muted">
                                    <i class="mdi mdi-18px mdi-cog"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="mdi mdi-18px mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>
                            <li>
                                <a href="home" class="{{ \Route::is('admin.home') ? 'active' : '' }}" >
                                    <i class="mdi mdi-18px mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('manage.user.index') }}" class="" >
                                    <i class="mdi mdi-18px mdi-account-multiple"></i>
                                    <span> Manage Pengguna </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('manage.kategori.index') }}" class="" >
                                    <i class="mdi mdi-18px mdi-book-open-variant"></i>
                                    <span> Manage Kategori Materi </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('manage.materi.index') }}" class="" >
                                    <i class="mdi mdi-18px mdi-book-open-page-variant"></i>
                                    <span> Manage Materi </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('manage.soal.index') }}" class="" >
                                    <i class="mdi mdi-18px mdi-comment-question-outline"></i>
                                    <span> Manage Soal </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('manage.nilai.index') }}" class="" >
                                    <i class="mdi mdi-18px mdi-numeric-9-plus-box-multiple-outline"></i>
                                    <span> Manage Nilai </span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-18px mdi-wrench"></i>
                                    <span> Configuration </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#">Discount & Referral Bonus</a></li>
                                    <li><a href="config-shipping">Shipping Discount & Tax</a></li>
                                    <li><a href="config-page">Website Function</a></li>
                                    <li><a href="regions">Region</a></li>
                                </ul>
                            </li> --}}

                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->