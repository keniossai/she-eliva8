@extends('layouts.backend.app')

@section('title','Tags')

@section('content')

<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">@yield('title')</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div>
                            <a href="{{ route('tag.create') }}" class="btn btn-success waves-effect waves-light mb-3"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create Tag</a>
                        </div>

                        <div class="table-responsive mb-4">
                            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck">
                                                <label class="form-check-label" for="customercheck"></label>
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $key=>$tag)
                                        <tr>
                                            <td>
                                                <div class="form-check text-center">
                                                    <input type="checkbox" class="form-check-input" id="customercheck1">
                                                    <label class="form-check-label" for="customercheck1"></label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-reset  fw-bold">{{ $key + 1 }}</a> </td>
                                            <td>
                                                <span>{{ $tag->name }}</span>
                                            </td>
                                            <td>{{ $tag->slug }}</td>

                                            <td>
                                                {{ $tag->created_at }}
                                            </td>
                                            <td>
                                                <div class="badge bg-pill bg-success-subtle text-success font-size-12">Active</div>
                                            </td>
                                            <td>
                                                <a href="{{ route('tag.edit',$tag->id) }}" class="px-1 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                <button type="button" style="border: none; background: transparent;" onclick="deleteTag({{ $tag->id }})" class="px-1 text-danger"><i class="uil uil-trash-alt font-size-18"></i></button>
                                                <form action="{{ route('tag.destroy',$tag->id) }}" method="POST" id="delete-form-{{ $tag->id }}" style="display: none;">
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
    function deleteTag(id){
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

