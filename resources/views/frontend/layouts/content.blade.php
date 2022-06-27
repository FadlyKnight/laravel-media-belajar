<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Media Belajar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('front/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css' ) }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css' ) }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/aos/aos.css' ) }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css' ) }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css' ) }}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ asset('front/assets/css/variables.css' ) }}" rel="stylesheet">
  <!-- <link href="{{ asset('front/assets/css/variables-blue.css' ) }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('front/assets/css/variables-green.css' ) }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('front/assets/css/variables-orange.css' ) }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('front/assets/css/variables-purple.css' ) }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('front/assets/css/variables-red.css' ) }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('front/assets/css/variables-pink.css' ) }}" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{ asset('front/assets/css/main.css' ) }}" rel="stylesheet">

  @stack('styles')

</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.layouts.header')

  <main id="main">
    @yield('content')
  </main>
  <!-- ======= Footer ======= -->
  @include('frontend.layouts.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('front/assets/js/main.js') }}"></script>

  @stack('scripts')

</body>

</html>