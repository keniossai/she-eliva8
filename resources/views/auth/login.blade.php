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
                    <div class="col-md-5 ml-auto mr-auto">
                        <div class="card card-signup p-4">
                           <h3 class="card-title text-center">Do it the social way</h3>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="social text-center p-2">
                                        <button class="btn btn-just-icon btn-round btn-facebook">
                                        <i class="fa fa-facebook"> </i>
                                        </button>
                                       <button class="btn btn-just-icon btn-round btn-twitter">
                                       <i class="fa fa-twitter"></i>
                                       </button>
                                       <button class="btn btn-just-icon btn-round btn-dribbble">
                                       <i class="fa fa-google"></i>
                                       </button>
                                       <br>
                                       <span class="mt-2"> or be classical </span>
                                    </div>
                                    <form class="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                       <div class="form-group has-default">
                                          <div class="input-group">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="material-icons">mail</i>
                                                </span>
                                             </div>
                                             <input type="email" name="email" id="email" class="form-control" :value="old('email')" placeholder="Email or username"  autocomplete="username">
                                          </div>
                                       </div>
                                       <div class="form-group has-default">
                                          <div class="input-group">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="material-icons">lock_outline</i>
                                                </span>
                                             </div>
                                             <input type="password" name="password" id="password" placeholder="password" class="form-control">
                                          </div>
                                       </div>
                                       <div class="form-check">
                                          <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value >
                                          <span class="form-check-sign">
                                          <span class="check"></span>
                                          </span>
                                          Remember me
                                          </label>
                                        </div>
                                        <div class="text-center">
                                            @if (Route::has('password.request'))
                                                <a class="" href="{{ route('password.request') }}" >
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                       <div class="text-center">
                                          <button type="submit"  class="btn btn-primary btn-round mt-4">Login</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
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
         <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
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
