<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ $metatitle ?? 'Figure Factory | Dashboard' }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{ $metadesc ?? "dashboard admin" }}" name="description" />
        <meta content="Figure Factory" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('logo-light.png')}}">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        
        @yield('css-top')
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.css">
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('dashboard/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('dashboard/assets/css/app.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />
        {{-- <link href="{{asset('dashboard/assets/css/main.css')}}" rel="stylesheet" type="text/css" /> --}}

        <!-- Morris-->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <!-- Sweet Alert-->
        <link href="{{asset('dashboard/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css -->
        <link href="{{url('dashboard/assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('dashboard/assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('dashboard/assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('dashboard/assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        @yield('css')
        <script>
            const MAIN_URL = "{{ url('/') }}";
            const _token = "{{ csrf_token() }}";
        </script>
        @stack('style')
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
            @include('backend.layouts.topbar')
            @include('backend.layouts.sidebar')

            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div> 
            </div>

            @include('backend.layouts.footer')
        </div>

        @yield('js-top')
        
        <!-- Vendor js -->
        <script src="{{ asset('dashboard/assets/js/vendor.min.js') }}"></script>

        <!-- knob plugin -->
        <script src="{{ asset('dashboard/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

        <!--Morris Chart-->
        {{-- <script src="{{ asset('dashboard/assets/libs/morris-js/morris.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('dashboard/assets/libs/raphael/raphael.min.js') }}"></script> --}}

        <!-- Dashboard init js-->
        {{-- <script src="{{ asset('dashboard/assets/js/pages/dashboard.init.js') }}"></script> --}}

        <!-- App js -->
        <script src="{{ asset('dashboard/assets/js/app.min.js') }}"></script>
        <!-- Sweet Alerts js -->
        <script src="{{asset('dashboard/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
        <!-- third party js -->
        <script src="{{url('dashboard/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/buttons.flash.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/buttons.print.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/dataTables.select.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/pdfmake/vfs_fonts.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
        @yield('js')
        
        <script>
            @if (session()->has('success'))
                swal('success',"{{ session()->get('success') }}", 'success');
            @endif
            
            @if (session()->has('error'))
                swal('error',"{{ session()->get('error') }}", 'error');
            @endif

        </script>

        @stack('script')

        
    </body>
</html>