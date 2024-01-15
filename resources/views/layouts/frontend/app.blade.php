<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.codevibrant.com/html/kavya/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 13:33:02 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('client/images/favicon.png') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600&amp;display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}" />

  <!-- Fontawesome CSS-->
  <link rel="stylesheet" href="{{ asset('client/css/all.css') }}" />

  <!-- slick css -->
  <link rel="stylesheet" href="{{ asset('client/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('client/css/slick-theme.css') }}">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('client/css/preloader.css') }}" />
  <link rel="stylesheet" href="{{ asset('client/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('client/css/responsive.css') }}" />
  <link rel="stylesheet" href="{{ asset('client/css/dark.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/toastr.css') }}" />

  <title>@yield('title') - {{ config('app.name', 'Blog') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="kavya-dark">
  <!-- Preloader -->
  {{-- <div class="preloader-wrapper">
    <div class="preloader">
      <div class="preloader-circle" id="status">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div> --}}
  <!-- Preloader end -->

  <!-- Header -->
   @include('layouts.frontend.partials.header')
  <!-- header end -->
  <div id="app">
      @yield('content')
  </div>

  <!-- Footer section -->
    @include('layouts.frontend.partials.footer')
  <!-- Footer section end -->

  <!-- Scroll to top -->
  <div id="stop" class="scroll-to-top">
    <span><a href="#"><i class="fas fa-arrow-up"></i></a></span>
  </div>
  <!-- Scroll to top end -->

  <!-- Javascript -->
  <script src="{{ asset('client/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('client/js/slick.min.js') }}"></script>
  <script src="{{ asset('client/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('client/js/ResizeSensor.min.js') }}"></script>
  <script src="{{ asset('client/js/theia-sticky-sidebar.min.js') }}"></script>
  <script src="{{ asset('client/js/bootstrap-notify.js') }}"></script>
  <script src="{{ asset('assets/js/toastr.js') }}"></script>
  <script src="{{ asset('client/js/request.js') }}"></script>
  <script src="{{ asset('client/js/sweetalert.min.js') }}"></script>
  <script src="{{ asset('client/js/validate.js') }}"></script>
  <script src="{{ asset('client/js/main.js') }}"></script>
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
