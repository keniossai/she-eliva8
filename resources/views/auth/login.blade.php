<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.codevibrant.com/html/kavya/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 13:33:02 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="48x48" href="assets/images/favicon.png">

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

  <title>Login</title>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader-wrapper">
    <div class="preloader">
      <div class="preloader-circle" id="status">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
  <!-- Preloader end -->

  <!-- page header end -->
  <section class="contact-section" style="padding-top: 12rem;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5" style="margin: auto; text-align: center;">
          <form class="contact-form">
            <h3>Sign in</h3>
            <p>Enter your log-in details for unlimited access to She Eliva8's content</p>

            <div class="mb-3">
                <input type="email" class="form-control form-input" placeholder="Email">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control form-input" placeholder="Password">
            </div>
            <div class="form-switch text-left text-info">
                @if (Route::has('password.request'))
                      <a class="" href="{{ route('password.request') }}">
                          {{ __('Forgot your password?') }}
                      </a>
                  @endif
              </div>
            <button type="submit" class="btn bg-gradient-info w-50 mt-4 mb-0">Login</button>
          </form>
          <div class=" text-center pt-5 px-lg-2 px-1">
            <p class="mb-4 text-sm mx-auto">
              Don't have an account?
              <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Javascript -->
  <script src="{{ asset('client/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('client/js/slick.min.js') }}"></script>
  <script src="{{ asset('client/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('client/js/ResizeSensor.min.js') }}"></script>
  <script src="{{ asset('client/js/theia-sticky-sidebar.min.js') }}"></script>
  <script src="{{ asset('client/js/main.js') }}"></script>
  <style>
    .bg-gradient-info {
        background-color: black;
        color: white;
        border: none;
    }
    .bg-gradient-info:hover {
        color: white;
        border: none;
    }
    .form-input{
        height: 50px !important;
    }
  </style>
</body>


</html>
