
<header>

    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>

    <!--    NAVBAR FOR LARGE SCREEN-->
    <nav id="my-nav1" class="navbar navbar-expand-lg navbar-light bg-light stroke navbar-light-vision">
        <div class="container">
                <a href="#background-carousal" title="Logo" class="logo scroll link main-logo">
                    <img src="{{ asset('front/img/logo-img.png') }}" alt="logo" class="logo-dark default">
                </a>

            <div class="my-tog-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent1" >
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home.beranda') }}">Beranda</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.materi') }}">Materi</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  First level 3  </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#"> Second level 1 </a></li>
                              <li><a class="dropdown-item" href="#"> Second level 2 &raquo </a>
                                 <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 3 &raquo </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href=""> Fourth level 1</a></li>
                                        <li><a class="dropdown-item" href=""> Fourth level 2</a></li>
                                    </ul>
                                    </li>
                                    <li><a class="dropdown-item" href=""> Second level  4</a></li>
                                    <li><a class="dropdown-item" href=""> Second level  5</a></li>
                                 </ul>
                              </li>
                              <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
                              <li><a class="dropdown-item" href="#"> Dropdown item 4 </a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.soal') }}">Soal</a>
                        </li>
                    </ul>
                    {{-- data-toggle="modal" data-target=".modal" --}}
                    @auth
                    <a href="{{ route('home') }}"  class="btn btn-primary rounded-pill navbar-btn">Profile</a>
                        @else
                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill navbar-btn">Login</a>
                    @endauth
                </div>


            </div>
    </nav>

    <div class="outer-window">
        <div class="navbar-content">

            <nav class="navbar1">
            <a class="close-outerwindow"><i class="las la-times"></i></a>
                <a href="#background-carousal"><img src="{{ asset('front/img/logo-img.png')}}" alt="logo" class="logo-small-nav default"></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home.beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.materi') }}">Materi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.soal') }}">Soal</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="btn btn-light m-4 p-2 rounded-pill text-primary nav-link" style="color: black !important;">Profile</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-light m-4 p-2 rounded-pill text-primary nav-link" style="color: black !important;">Login</a>
                    </li>
                @endauth
            </ul>
        </nav>
    </div>
    </div>

</header>