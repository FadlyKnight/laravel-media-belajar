<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.header')
    @stack('css')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="150">

<!--  PRELOADER  -->
<div class="loader1">
    <div class="loading-area">
        <div class="circle"></div>
    <div class="circle-small"></div>
    <div class="circle-big"></div>
    <div class="circle-inner-inner"></div>
    <div class="circle-inner"></div>
    </div>
</div>

@include('frontend.layouts.navbar')

@yield('content')

@include('frontend.layouts.footer')

@stack('scripts')

</body>
</html>