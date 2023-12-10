@extends('layouts.backend.app')

@section('title','Category')

@section('content')

<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">All @yield('title')</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div>
                            <a href="{{ route('category.create') }}" class="btn btn-success waves-effect waves-light mb-3"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Category</a>
                        </div>

                        <div class="table-responsive mb-4">
                            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Post Count</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key=>$category)
                                        <tr>
                                            <td><span >{{ $key + 1 }}</span> </td>
                                            <td>
                                                <span  class="text-reset  fw-bold">{{ $category->name }}</span>
                                            </td>
                                            <td>{{ $category->posts->count() }}</td>

                                            <td>
                                                {{ $category->created_at }}
                                            </td>
                                            <td>
                                                {{ $category->updated_at }}
                                            </td>
                                            <td>
                                                <a href="{{ route('category.edit',$category->id) }}" class="px-1 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                <button type="button" style="border: none; background: transparent;" onclick="deleteCategory({{ $category->id }})" class="px-1 text-danger"><i class="uil uil-trash-alt font-size-18"></i></button>
                                                <form action="{{ route('category.destroy',$category->id) }}" method="POST" id="delete-form-{{ $category->id }}" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container-fluid -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function deleteCategory(id){
            Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
            event.preventDefault();
            document.getElementById('delete-form-'+id).submit();

            }
        });
    }
</script>
@endsection

