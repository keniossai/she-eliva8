<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 02:09:41 GMT -->
<head>

        <meta charset="utf-8" />
        <title>@yield('title') - {{ config('app.name', 'Blog') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets') }}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/toastr.css') }}" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/56626a3766.js" crossorigin="anonymous"></script>

    </head>


    <body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            @include('layouts.backend.partials.header')
            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.backend.partials.sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    @yield('content')
                </div>
                <!-- End Page-content -->


                @include('layouts.backend.partials.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- Right Sidebar -->
        @include('layouts.backend.partials.rightside')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets') }}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets') }}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('assets') }}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('assets') }}/libs/node-waves/waves.min.js"></script>
        <script src="{{ asset('assets') }}/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="{{ asset('assets') }}/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets') }}/libs/apexcharts/apexcharts.min.js"></script>

        <script src="{{ asset('assets') }}/js/pages/dashboard.init.js"></script>
        <!-- Required datatable js -->
        <script src="{{ asset('assets') }}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('assets') }}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('assets') }}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- init js -->
        <script src="{{ asset('assets') }}/js/pages/ecommerce-datatables.init.js"></script>

        <!-- App js -->
        <script src="{{ asset('assets') }}/js/app.js"></script>
        <script src="{{ asset('assets/js/toastr.js') }}"></script>
        <script>

            // success message popup notification

            @if(Session::has('success'))

                toastr.success("{{ Session::get('success') }}");

            @endif


            // info message popup notification

            @if(Session::has('info'))

                toastr.info("{{ Session::get('info') }}");

            @endif


            // warning message popup notification

            @if(Session::has('warning'))

                toastr.warning("{{ Session::get('warning') }}");

            @endif


            // error message popup notification

            @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
            @endif

            @foreach($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        </script>

    </body>


</html>

