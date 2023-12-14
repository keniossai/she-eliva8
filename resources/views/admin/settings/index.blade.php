@extends('layouts.backend.app')

@section('title', 'Settings')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Settings</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row mb-4">
        <div class="col-xl-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="text-center">
                        <div class="clearfix"></div>
                        <div>
                            <img src="{{ url('storage/profile/'.Auth::user()->image) }}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                        </div>
                        <h5 class="mt-3 mb-1">{{ Auth::user()->name }}</h5>
                        <p class="text-muted">{{ Auth::user()->role->name }}</p>
                    </div>

                    <hr class="my-4">
                    <div class="text-muted">
                        <h5 class="font-size-16">About</h5>
                        <p>{{ Auth::user()->about }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card mb-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab" aria-selected="true">
                            <i class="uil uil-user-circle font-size-20"></i>
                            <span class="d-none d-sm-block">Profile Settings</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab" aria-selected="false" tabindex="-1">
                            <i class="fa fa-lock p-2" aria-hidden="true"></i>
                            <span class="d-none d-sm-block">Change Password</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab" aria-selected="false" tabindex="-1">
                            <i class="fa fa-info-circle p-2" aria-hidden="true"></i>
                            <span class="d-none d-sm-block">About Blog</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab content -->
                <div class="tab-content p-4">
                    <div class="tab-pane active" id="about" role="tabpanel">
                        <div>
                            <div class="col-lg-12">
                                <div class="mt-4">
                                    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-email-input">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-email-input">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-email-input">Profile Image :</label>
                                                    <input type="file" class="form-control" id="image" name="image">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-Fullname-input">About</label>
                                                    <textarea rows="3" class="form-control border-0 resize-none" name="about" placeholder="Tell the world about you....">{{ Auth::user()->about }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-3 mt-3">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Update Settings</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tasks" role="tabpanel">
                        <div>
                            <div class="col-lg-12">
                                <div class="mt-4">
                                    <form action="{{ route('admin.password.update') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="Old_Password">Old Password :</label>
                                                    <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Enter old password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="new_password">New Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="confirm_password">Confirm Password</label>
                                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm New Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-3 mt-3">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Update Settings</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <div>
                            <div class="border rounded mt-4">
                                <form action="#">
                                    <textarea name="body" id="body"></textarea>
                                    <div class="d-flex flex-wrap mt-3">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                    </div>
                                </form>
                            </div> <!-- end .border-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

</div>
@endsection
