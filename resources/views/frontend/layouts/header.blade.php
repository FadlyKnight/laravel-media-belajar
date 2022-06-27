@php
    $kategori_materi = new App\Kategori;
    $parent_kat = $kategori_materi->whereNull('parent_id')->get();
@endphp
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ route('home.beranda')  }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        {{-- <img src="{{ asset('front/assets/img/logo.png')}}" alt="">  --}}
        <h1>HeroBiz<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto" href="{{ route('home.beranda') }}">Beranda</a></li>
          <li><a class="nav-link scrollto" href="{{ route('siswa.soal.show') }}">Soal</a></li>
          <li class="dropdown"><a href="#"><span>Materi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>              
              @foreach ($parent_kat as $item)
                
                @if ($item->child()->count() > 0)
                @include('frontend.layouts.child-menu', ['child' => $item->child()->get(), 'name_parent' => $item->nama ])
                @else
                <li><a href="{{ route('home.materi', $item->id) }}">{{ $item->nama }}</a></li>
                @endif
                                    
              @endforeach
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      @auth
      <a class="btn-getstarted scrollto" href="{{ route('home') }}">Profile</a>
      @else
      <a class="btn-getstarted scrollto" href="{{ route('login') }}">Login</a>
      @endauth

    </div>
  </header><!-- End Header -->
