@extends('layouts.backend.app')

@section('title', 'Create')


@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Create Tag</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div id="addproduct-accordion" class="custom-accordion">
                <div class="card">
                    <a href="#addproduct-metadata-collapse" class="text-dark  collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-controls="addproduct-metadata-collapse">
                        <div class="p-4">

                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                        <div class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                            Add
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-16 mb-1">@yield('title') Tag</h5>
                                    <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>

                        </div>
                    </a>

                    <div id="addproduct-metadata-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            <form method="POST" action="{{ route('tag.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="metatitle">Name</label>
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Enter your Tag title">
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="metakeywords">Slug</label>
                                            <input id="slug" name="slug" type="text" class="form-control" placeholder="Optional">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col ms-auto">
                                        <div class="d-flex flex-reverse flex-wrap gap-2">
                                            <a href="{{ route('tag.index') }}" class="btn btn-danger"> <i class="uil uil-times"></i> Cancel </a>
                                            <button type="submit" class="btn btn-success"> <i class="uil uil-file-alt"></i> Save </button>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->



</div>
@endsection
