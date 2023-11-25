<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="https://demos.creative-tim.com/material-dashboard-pro-bs4/assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="https://demos.creative-tim.com/material-dashboard-pro-bs4/assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Login</title>
<meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />



<meta name="keywords" content="Blog, articles, motivation, help, women, interaction, mindset, collective, connect, social">
<meta name="description" content="She Elivate blog">

<meta property="fb:app_id" content="655968634437471">
<meta property="og:title" content="She Elivate Dashboard" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html" />
<meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg" />
<meta property="og:description" content="She elivate blog." />

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link href="{{ asset('assets/css/material-dashboard.min.css') }}" rel="stylesheet" />

<link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/toastr.css') }}" rel="stylesheet" />
<script src="https://kit.fontawesome.com/56626a3766.js" crossorigin="anonymous"></script>
</head>
      <body class="off-canvas-sidebar">

         <div class="wrapper wrapper-full-page">
            <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('https://demos.creative-tim.com/material-dashboard-pro-bs4/assets/img/login.jpg'); background-size: cover; background-position: top center;">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-5 ml-auto mr-auto">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                           <div class="card card-login ">
                              <div class="card-header card-header-rose text-center">
                                 <h3 class="card-title">Login</h3>
                                 <span>or</span>
                                 <h5>Login with Socials</h5>
                                 <div class="social-line">
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-facebook-official"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="card-body">
                                 <span class="bmd-form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text">
                                          <i class="material-icons">email</i>
                                          </span>
                                       </div>
                                       <input type="email" name="email" id="email" class="form-control" placeholder="Email or Username">
                                    </div>
                                 </span>
                                 <span class="bmd-form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text">
                                          <i class="material-icons">lock_outline</i>
                                          </span>
                                       </div>
                                       <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    </div>
                                 </span>
                              </div>
                              <div class="card-footer justify-content-center">
                                 <button type="submit" class="btn btn-flex">Login</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
         <script src="{{ asset('assets') }}/js/popper.min.js"></script>
         <script src="{{ asset('assets') }}/js/bootstrap-material-design.min.js"></script>
         <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
         <script async defer src="https://buttons.github.io/buttons.js"></script>
         <script src="{{ asset('assets') }}/js/plugins/chartist.min.js"></script>
         {{-- <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script> --}}
         <script src="{{ asset('assets') }}/js/material-dashboard.min.js" type="text/javascript"></script>
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
         <script>
            $(document).ready(function() {
              md.checkFullPageBackgroundImage();
              setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
              }, 700);
            });
         </script>
      </body>
   </html>
