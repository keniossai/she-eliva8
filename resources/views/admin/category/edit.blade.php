@extends('layouts.backend.app')

@section('title', 'Edit')


@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Edit Category</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div id="addproduct-accordion" class="custom-accordion">
                <div class="card">
                    <div class="p-4">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-16 mb-1">Edit: {{ $category->name  }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 border-top">
                        <form method="POST" action="{{ route('admin.category.update',$category->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="metatitle">Name</label>
                                        <input id="name" name="name" type="text" class="form-control" value="{{ $category->name }}">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="metakeywords">Slug</label>
                                        <input id="slug" name="slug" type="text" class="form-control" placeholder="Optional" value="{{ $category->slug }}">
                                    </div>
                                </div>
                                {{-- <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="metatitle">Image</label>
                                        <input id="image" name="image" type="file" class="form-control">
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row mb-4">
                                <div class="col ms-auto">
                                    <div class="d-flex flex-reverse flex-wrap gap-2">
                                        <a href="{{ route('admin.tag.index') }}" class="btn btn-danger"> <i class="uil uil-times"></i> Cancel </a>
                                        <button type="submit" class="btn btn-success"> <i class="uil uil-file-alt"></i> Update </button>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->



</div>
@endsection
