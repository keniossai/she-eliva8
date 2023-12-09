<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ config('app.name', 'Blog') }}</title>

         <!-- Bootstrap Css -->
         <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
         <!-- Icons Css -->
         <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
         <!-- App Css-->
         <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
         <script src="https://kit.fontawesome.com/56626a3766.js" crossorigin="anonymous"></script>
         <link href="{{ asset('assets/css/toastr.css') }}" rel="stylesheet" />
    </head>

    <body class="authentication-bg">
        <div class="account-pages my-5 pt-sm-5">
            @yield('content')
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
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
