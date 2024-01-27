

   @extends('layouts.guest')

   @section('title', 'Register')

   @section('content')
   <div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Register Account</h5>
                        <p class="text-muted">Get your free She Elevates account now.</p>
                    </div>
                    <div class="p-2 mt-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" :value="old('name')" placeholder="Enter your name"  autofocus autocomplete="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" :value="old('email')" placeholder="Email your email"  autocomplete="email">
                            </div>
                            <div class="mb-3">
                                {{-- <label class="form-label" for="email">Username</label> --}}
                                <input type="hidden" name="username" id="username" class="form-control" value="user">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="userpassword">Password</label>
                                <input type="password" name="password" id="password" placeholder="Password..." class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="userpassword">Confirm Password</label>
                                <input type="password" id="password_confirmation"  name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password" class="form-control">
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="terms-condition" name="terms-condition" checked>
                                <label class="form-check-label" for="auth-terms-condition-check">I accept <a href="javascript: void(0);" class="text-reset ">Terms and Conditions</a></label>
                            </div>
                            <div class="mt-3 text-center">
                                <button class="btn btn-primary w-xl waves-effect waves-light" type="submit">Register</button>
                            </div>

                            <div class="mt-4 text-center">
                                <div class="signin-other-title">
                                    <h5 class="font-size-14 mb-3 title">Sign Up with</h5>
                                </div>
                                <ul class="list-inline">
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
                                <p class="text-muted mb-0">Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Login</a></p>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="mt-5 text-center">
                <p>© <script>document.write(new Date().getFullYear())</script> She Elevates</p>
            </div>

        </div>
    </div>
    <!-- end row -->
</div>
   @endsection
