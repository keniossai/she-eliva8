<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">

  <title>@yield('title') - {{ config('app.name', 'Blog') }}</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('backend') }}/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ asset('backend') }}/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('backend') }}/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('backend') }}/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body class="">


@yield('content')

<footer class="footer py-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> She-Eliva8 Blog.
          </p>
        </div>
      </div>
    </div>
  </footer>
    <script src="{{ asset('backend') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('backend') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('backend') }}/js/plugins/smooth-scrollbar.min.js"></script>

    <script src="{{ asset('backend') }}/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  </body>

  </html>
