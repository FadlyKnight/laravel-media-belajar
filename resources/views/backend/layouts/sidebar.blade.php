
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="{{ asset('logo-light.png')}}" alt="user-img" title="Mat Helme" class="avatar-md">
                        <div class="dropdown">
                            <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"  aria-expanded="false">Figure Factories</a>
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
                                <a href="{{ route('admin.home') }}" class="{{ \Route::is('admin.home') ? 'active' : '' }}" >
                                    <i class="mdi mdi-18px mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/currency') }}" class="" >
                                    <i class="mdi mdi-18px mdi-currency-usd"></i>
                                    <span> Manage Currency </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-18px mdi-account-cowboy-hat"></i>
                                    <span> Manage Figurine </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ url('admin/figurine-size') }}">Figurine Size</a></li>
                                    <li><a href="{{ url('admin/add-ons') }}">Add Ons</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('admin.plan-subscription.index') }}"><i class="mdi mdi-18px mdi-inbox-full"></i>
                                    <span> Plan Subscription </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-18px mdi-account-cog"></i>
                                    <span> Manage Users </span>
                                    @php
                                        $user = \App\Models\User::where(['role' => 'partner', 'password_reset' => 1])->count();
                                        $cc = \App\Models\User::where(['partner_role' => 0, 'password_reset' => 1])->count();
                                        $gamedev = \App\Models\User::where(['partner_role' => 1, 'password_reset' => 1])->count();
                                    @endphp
                                    <span class="badge badge-danger">
                                        {{$user}}
                                    </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('admin.influencer.index') }}">
                                            Content Creator
                                            <span class="badge badge-danger float-right">
                                                {{$cc}}
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.game-developer.index') }}">
                                            Game Developer
                                            <span class="badge badge-danger float-right">
                                                {{$gamedev}}
                                            </span>
                                        </a>
                                    </li>
                                    <li><a href="{{ route('admin.user.index') }}">Registered User</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-18px mdi-book-account"></i>
                                    <span> Manage Transactions </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('admin.order.index') }}">Figurine Transactions</a></li>
                                    <li><a href="{{ route('admin.wallet') }}">Withdrawal Partner</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-18px mdi-book-account"></i>
                                    <span> Partner Statistics </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('admin.partner-referral.index') }}">Content Creator</a></li>
                                    <li><a href="{{ route('admin.partner-referral.index-game-developer') }}">Game Developer</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('admin/gallery') }}" class="{{ request()->is('admin/currency*') ? 'active' : '' }}" >
                                    <i class="mdi mdi-18px mdi-folder-multiple-image"></i>
                                    <span> Gallery </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-18px mdi-email-multiple"></i>
                                    <span> Mailing List </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ url('admin/email-launch') }}">Email Launching</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('admin.coupon.index') }}" class="{{ request()->is('admin/coupon*') ? 'active' : '' }}" >
                                    <i class="mdi mdi-18px mdi-paper-cut-vertical"></i>
                                    <span> Coupon </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-18px mdi-wrench"></i>
                                    <span> Configuration </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ url('/admin/discount') }}">Discount & Referral Bonus</a></li>
                                    <li><a href="{{ route('admin.config-shipping') }}">Shipping Discount & Tax</a></li>
                                    <li><a href="{{ route('admin.config-page') }}">Website Function</a></li>
                                    <li><a href="{{ route('admin.regions') }}">Region</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('admin.partner-slider') }}" class="" >
                                    <i class="mdi mdi-18px mdi-view-carousel"></i>
                                    <span> Manage Partner Slider </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.contact-us') }}" >
                                    <i class="mdi mdi-18px mdi-contacts"></i>
                                    <span> Contact Us </span>
                                    <span class="badge badge-danger float-right">
                                        {{\App\Models\ContactUs::where('read_status', 0)->count()}}
                                    </span>
                                </a>
                            </li>









                            {{-- <li>
                                <a href="{{ route('admin.product.index') }}" class="{{ request()->is('admin/product*') ? 'active' : '' }}" >
                                    <i class="mdi mdi-18px mdi-forum"></i>
                                    <span> Product </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.category.index') }}" class="{{ request()->is('admin/category*') ? 'active' : '' }}" >
                                    <i class="mdi mdi-18px mdi-forum"></i>
                                    <span> Category </span>
                                </a>
                            </li> --}}
                            {{-- <li>
                                <a href="{{ route('admin.user.index') }}" class="{{ request()->is('admin/user*') ? 'active' : '' }}" >
                                    <i class="mdi mdi-18px mdi-forum"></i>
                                    <span> User </span>
                                </a>
                            </li> --}}
                           {{--  <li>
                                <a href="{{ route('admin.referral.index') }}" class="{{ request()->is('admin/referral*') ? 'active' : '' }}" >
                                    <i class="mdi mdi-18px mdi-forum"></i>
                                    <span> Referral </span>
                                </a>
                            </li> --}}

                            <li>
                                <a href="{{ route('admin.notification.index') }}" class="{{ request()->is('admin/notification*') ? 'active' : '' }} d-none" >
                                    <i class="mdi mdi-18px mdi-forum"></i>
                                    {{-- <span class="badge badge-danger float-right">{{ count(Auth::user()->unreadNotifications) }}</span> --}}
                                    <span> Notification </span>
                                </a>
                            </li>


                            {{-- <li>
                                <a href="{{ url('/admin/shipping') }}" class="{{ request()->is('admin/shipping*') ? 'active' : '' }}" >
                                    <i class="mdi mdi-18px mdi-forum"></i>
                                    <span> Shipping </span>
                                </a>
                            </li> --}}

                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->