@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Welcome Back !</h5>
                        <p class="text-muted">Enter your log-in details for unlimited access to She Elevates content</p>
                    </div>
                    <div class="p-2 mt-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input type="email" name="email" id="email" class="form-control" :value="old('email')" placeholder="Email or username"  autocomplete="username">
                            </div>

                            <div class="mb-3">
                                <div class="float-end">
                                    @if (Route::has('password.request'))
                                        <a class="text-muted" href="{{ route('password.request') }}" >
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                                <label class="form-label" for="userpassword">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="password">
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="auth-remember-check">Remember me</label>
                            </div>

                            <div class="mt-3 text-center">
                                <button class="btn btn-primary w-xl waves-effect waves-light" type="submit">Log In</button>
                            </div>
                            <div class="mt-4 text-center">
                                <div class="signin-other-title">
                                    <h5 class="font-size-14 mb-3 title">Sign in with</h5>
                                </div>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="/auth/google/redirect" class="social-list-item bg-danger text-white border-danger">
                                            <i class="fa fa-google" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-4 text-center">
                                <p class="mb-0">Don't have an account ? <a href="{{ route('register') }}" class="fw-medium text-primary"> Signup now </a> </p>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="mt-5 text-center">
                <p>© <script>document.write(new Date().getFullYear())</script> Eliva8-Her</p>
            </div>

        </div>
    </div>
    <!-- end row -->
</div>
@endsection
