<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="https://demos.creative-tim.com/material-dashboard-pro-bs4/assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="https://demos.creative-tim.com/material-dashboard-pro-bs4/assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
    Material Dashboard PRO by Creative Tim
  </title>
<meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />



<meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
<meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">

<meta itemprop="name" content="Material Dashboard PRO by Creative Tim">
<meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">

<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@creativetim">
<meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">
<meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
<meta name="twitter:creator" content="@creativetim">
<meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">

<meta property="fb:app_id" content="655968634437471">
<meta property="og:title" content="Material Dashboard PRO by Creative Tim" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html" />
<meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg" />
<meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design." />
<meta property="og:site_name" content="Creative Tim" />

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css">

<link href="{{ asset('assets') }}/css/material-dashboard.min.css" rel="stylesheet" />

<link href="{{ asset('assets') }}/demo/demo.css" rel="stylesheet" />

</head>
<body class>
    <div class="wrapper ">
        @include('layouts.backend.partials.sidebar')
        <div class="main-panel">
            @include('layouts.backend.partials.header')
            @yield('content')
            @include('layouts.backend.partials.footer')
        </div>
    </div>


<script src="{{ asset('assets') }}/js/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/popper.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap-material-design.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>

<script src="{{ asset('assets') }}/js/plugins/moment.min.js"></script>

<script src="{{ asset('assets') }}/js/plugins/sweetalert2.js"></script>

<script src="{{ asset('assets') }}/js/plugins/jquery.validate.min.js"></script>

<script src="{{ asset('assets') }}/js/plugins/jquery.bootstrap-wizard.js"></script>

<script src="{{ asset('assets') }}/js/plugins/bootstrap-selectpicker.js"></script>

<script src="{{ asset('assets') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>

<script src="{{ asset('assets') }}/js/plugins/jquery.dataTables.min.js"></script>

<script src="{{ asset('assets') }}/js/plugins/bootstrap-tagsinput.js"></script>

<script src="{{ asset('assets') }}/js/plugins/jasny-bootstrap.min.js"></script>

<script src="{{ asset('assets') }}/js/plugins/fullcalendar.min.js"></script>

<script src="{{ asset('assets') }}/js/plugins/jquery-jvectormap.js"></script>

<script src="{{ asset('assets') }}/js/plugins/nouislider.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<script src="{{ asset('assets') }}/js/plugins/arrive.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="{{ asset('assets') }}/js/plugins/chartist.min.js"></script>

<script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>

<script src="{{ asset('assets') }}/js/material-dashboard.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

      md.initVectorMap();

    });
  </script>
</body>

</html>
