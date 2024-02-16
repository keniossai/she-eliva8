@extends('layouts.backend.app')

@section('title', 'Create')


@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Add Post</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div id="addproduct-accordion" class="custom-accordion">
                    <div class="card">
                        <div class="text-dark " data-bs-toggle="collapse" aria-expanded="true"
                            aria-controls="addproduct-billinginfo-collapse">
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Create a post</h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="addproduct-billinginfo-collapse" class="collapse show"
                            data-bs-parent="#addproduct-accordion">

                            <div class="p-4 border-top">
                                <form method="POST" action="{{ route('admin.post.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="productname">Title</label>
                                        <input id="title" name="title" type="text" class="form-control"
                                            placeholder="Enter your Product Name">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Image</label>
                                                <input id="image" name="image" type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3" {{ $errors->has('categories') ? 'focused error' : '' }}>
                                                <label class="form-label" for="category">Select Category</label>
                                                <select class="form-control select2 select2-hidden-accessible"
                                                    name="category" id="category">
                                                    <option data-select2-id="select2-data-3-eeea">Select</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3" {{ $errors->has('tags') ? 'focused error' : '' }}>
                                                <label class="form-label" for="tag">Select Tag</label>
                                                <select class="select2 form-control" data-live-search="true" name="tags[]"
                                                    id="tag" multiple>
                                                    @foreach ($tags as $tag)
                                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label">Description</label>
                                        <textarea name="body" id="texteditor"></textarea>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check form-switch form-switch-md">
                                            <input type="checkbox" class="form-check-input" id="publish" name="status"
                                                value="1">
                                            <label class="form-check-label" for="customSwitchsizemd">Publish</label>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="col ms-auto">
                                            <div class="d-flex flex-reverse flex-wrap gap-2">
                                                <a href="{{ route('admin.post.index') }}" class="btn btn-danger"> <i
                                                        class="uil uil-times"></i> Cancel </a>
                                                <button type="submit" class="btn btn-success"> <i
                                                        class="uil uil-file-alt"></i> Save </button>
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
    </div>

@endsection
