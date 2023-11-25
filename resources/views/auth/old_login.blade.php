<!DOCTYPE html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="She Elivate Blog" />
	<meta property="og:title" content="She Elivate Blog" />
	<meta property="og:description" content="She Elivate Blog" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Login</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/css/toastr.css') }}" />

</head>

<body class="vh-100">
    <div class="authincation h-100" >
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <p class="text-center">Enter your log-in details for unlimited access to She Eliva8's content</p>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input id="email" type="email" name="email" :value="old('email')" autofocus autocomplete="username" class="form-control" placeholder="Email or Username">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" type="password" name="password" autocomplete="current-password" placeholder="Password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="remember_me" name="remember">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="mb-3">
                                                @if (Route::has('password.request'))
                                                    <a class="" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="{{ route('register') }}">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('backend/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>
    <script src="{{ asset('backend/js/deznav-init.js') }}"></script>
	{{-- <script src="{{ asset('backend/js/styleSwitcher.js') }}"></script> --}}
    <script src="{{ asset('backend/js/toastr.js') }}"></script>
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
