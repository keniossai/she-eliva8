@extends('layouts.backend.app')

@section('title','Posts')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">All @yield('title')</h4>
                <a href="{{ route('admin.trashed') }}" class="btn btn-warning waves-effect waves-light"><i class="uil uil-trash-alt" aria-hidden="true"></i>Trashed</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="justify-evenly">
                            <a href="{{ route('admin.post.create') }}" class="btn btn-success waves-effect waves-light mb-3"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Post</a>
                        </div>

                        <div class="table-responsive mb-4">
                            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Visibility</th>
                                        <th>Is Approved</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $key=>$post)
                                    <tr>

                                        <td><span class="text-reset  fw-bold">{{ $key + 1 }}</span> </td>
                                        <td>
                                            <a href="" class="text-reset  fw-bold">{{ \Illuminate\Support\Str::limit($post->title, '10') }}</a>
                                        </td>
                                        <td>
                                            <span>{{ $post->user->name }}</span>
                                        </td>
                                        <td>
                                            {{ $post->view_count}}
                                        </td>
                                        <td>
                                            @if($post->is_approved == true)
                                                <div class="badge bg-pill bg-success-subtle text-success font-size-12 px-2">Approved</div>
                                            @else
                                                <div class="badge bg-pill bg-warning-subtle text-warning font-size-12 px-2">Pending</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($post->status == true)
                                                <div class="badge bg-pill bg-success-subtle text-success font-size-12 px-2">Published</div>
                                            @else
                                                <div class="badge bg-pill bg-warning-subtle text-warning font-size-12 px-2">Pending</div>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $post->created_at }}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.post.show',$post->id) }}" class="px-1 text-primary"><i class="uil uil-eye font-size-18"></i></a>
                                            <a href="{{ route('admin.post.edit',$post->id) }}" class="px-1 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <button type="button" style="border: none; background: transparent;" onclick="deletePost({{ $post->id }})" class="px-1 text-danger"><i class="uil uil-trash-alt font-size-18"></i></button>
                                            <form action="{{ route('admin.post.destroy',$post->id) }}" method="POST" id="delete-form-{{ $post->id }}" style="display: none;">
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
    function deletePost(id){
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

