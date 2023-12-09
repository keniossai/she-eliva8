@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Password Reset</h5>
                        <p class="text-muted">Enter your email address to receive instructions on how to reset your password.</p>
                    </div>
                    <div class="p-2 mt-4">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" id="email" type="email" name="email" :value="old('email')" autofocus>
                            </div>
                            <div class="mt-3 text-center">
                                <button class="btn btn-primary w-xl waves-effect waves-light" type="submit">Make Request</button>
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
