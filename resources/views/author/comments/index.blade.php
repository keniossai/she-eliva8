@extends('layouts.backend.app')

@section('title','Comments')

@section('content')

<div class="container-fluid">
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
                        <div class="table-responsive">
                            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Comments info</th>
                                        <th>Post info</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $key=>$comment)
                                    <tr>

                                        <td>
                                            <div class="media d-flex">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="{{ url('storage/profile/'.$comment->user->image) }}" alt="" class="avatar-xs me-2">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">{{ $comment->user->name }}</h5>
                                                    <p>{{ $comment->comment }}</p>
                                                    <a target="_blank" href="{{ route('post.details',$comment->post->slug.'#comments') }}">Reply</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media d-flex">
                                                <div class="media-right">
                                                    <a target="_blank" href="{{ route('post.details',$comment->post->slug) }}">
                                                        <img class="media-object" src="{{ url('storage/post/'.$comment->post->image) }}" width="64" height="64">
                                                    </a>
                                                </div>
                                                <div class="media-body p-2">
                                                    <a target="_blank" href="{{ route('post.details',$comment->post->slug) }}">
                                                        <h6 class="media-heading">{{ \Illuminate\Support\Str::limit($comment->post->title,'40') }}</h6>
                                                    </a>
                                                    <p>by <strong>{{ $comment->post->user->name }}</strong></p>
                                                </div>
                                            </div>

                                        </td>


                                        <td>
                                            {{-- <a href="{{ route('admin.post.show',$post->id) }}" class="px-1 text-primary"><i class="uil uil-eye font-size-18"></i></a> --}}
                                            <button type="button" style="border: none; background: transparent;" onclick="deleteComment({{ $comment->id }})" class="px-1 text-danger"><i class="uil uil-trash-alt font-size-18"></i></button>
                                            <form action="{{ route('author.comment.destroy',$comment->id) }}" method="POST" id="delete-form-{{ $comment->id }}" style="display: none;">
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
    function deleteComment(id){
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

