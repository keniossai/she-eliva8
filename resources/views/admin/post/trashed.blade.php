@extends('layouts.backend.app')

@section('title','Trashed Post')

@section('content')

<div class="container-fluid">
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
                        <div class="table-responsive mb-4">
                            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Favorite</th>
                                        <th>Visibility</th>
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
                                            <span>{{ $post->favorite_to_user->count() }}</span>
                                        </td>
                                        <td>
                                            {{ $post->view_count}}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.restore',$post->id) }}" class="px-1 text-success"><i class="fa fa-trash-restore" aria-hidden="true"></i></a>
                                            <button type="button" style="border: none; background: transparent;" onclick="forceDeletePost({{ $post->id }})" class="px-1 text-danger"><i class="uil uil-trash-alt font-size-18"></i></button>
                                            <form action="{{ route('admin.force.delete',$post->id) }}" method="POST" id="force-delete-form-{{ $post->id }}" style="display: none;">
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
    function forceDeletePost(id){
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
            document.getElementById('force-delete-form-'+id).submit();
            }
        });
    }
</script>
@endsection

