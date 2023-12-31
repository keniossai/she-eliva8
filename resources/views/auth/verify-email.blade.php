@extends('layouts.guest')

@section('title', 'Verify')

@section('content')
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Awesome!</h5>
                        <div class="alert alert-success text-center mb-4" role="alert"> {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</div>
                    </div>
                    <div class="p-2 mt-4">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <div class="mt-3 text-center">
                                <button class="btn btn-primary w-xl waves-effect waves-light" type="submit">{{ __('Resend Verification Email') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="p-2 mt-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="mt-3 text-center">
                                <button type="submit" class="btn btn-danger w-xl waves-effect waves-light">
                                    {{ __('Log Out') }}
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="mt-5 text-center">
                <p> Copyrights &copy;<script>document.write(new Date().getFullYear())</script> Eliva8-Her</p>
            </div>

        </div>
    </div>
    <!-- end row -->
</div>
@endsection

