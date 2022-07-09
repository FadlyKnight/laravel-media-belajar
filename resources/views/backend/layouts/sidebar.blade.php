
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        {{-- <img src="{{ asset('logo-light.png')}}" alt="user-img" title="avatar" class="avatar-md"> --}}
                        <div class="dropdown">
                            <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"  aria-expanded="false">{{ auth()->user()->name ?? 'Not Found' }}</a>
                        </div>
                        <p class="text-muted">{{ strtoupper(auth()->user()->role) ?? 'Tidak Ada' }}</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ url('/') }}" class="text-muted">
                                    <i class="mdi mdi-18px mdi-home"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#"
                                onclick="logout()"
                                >
                                    <i class="mdi mdi-18px mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>
                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'guru')

                                <li>
                                    <a href="{{ route('manage.dashboard') }}" class="{{ \Route::is('manage.dashboard') ? 'active' : '' }}" >
                                        <i class="mdi mdi-18px mdi-view-dashboard"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>
                                @if (auth()->user()->role == 'admin')
                                <li>
                                    <a href="{{ route('manage.user.index') }}" class="" >
                                        <i class="mdi mdi-18px mdi-account-multiple"></i>
                                        <span> Manage Pengguna </span>
                                    </a>
                                </li>
                                @endif

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

                            @else

                                <li>
                                    <a href="{{ route('siswa.home') }}" class="" >
                                        <i class="mdi mdi-18px mdi-account-cog-outline"></i>
                                        <span> Profile </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('siswa.soal.show') }}" class="" >
                                        <i class="mdi mdi-18px mdi-book-open-variant"></i>
                                        <span> Kerjakan Soal </span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('siswa.nilai.show') }}" class="" >
                                        <i class="mdi mdi-18px mdi-numeric-9-plus-box-multiple-outline"></i>
                                        <span> Lihat Nilai </span>
                                    </a>
                                </li> --}}
                                
                            @endif
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
            <script>
                function logout(){
                    if (confirm('Apakah anda ingin logout ?')) {                 
                        document.getElementById('logout-form').submit();   
                    }
                }
            </script>
            <!-- Left Sidebar End -->