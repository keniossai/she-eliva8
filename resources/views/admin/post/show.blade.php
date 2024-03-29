@extends('layouts.backend.app')

@section('title', 'Show')


@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.post.index') }}" class="btn btn-primary waves-effect "><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back</a>

                <div class="page-title-right">
                    @if ($post->is_approved == false)
                    <button type="button" onclick="approvePost({{ $post->id }})" class="btn btn-warning waves-effect " ><i class="fa fa-info-circle" aria-hidden="true"></i> Pending</button>
                    <form action="{{ route('admin.post.approve',$post->id) }}" method="POST" style="display: none;" id="approval-form">
                        @csrf
                        @method('PUT')
                    </form>
                    @else
                    <button type="button" class="btn btn-success" disabled><i class="fa fa-check" aria-hidden="true"></i> Approved</button>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 me-3">
                            <img class="rounded-circle avatar-sm" src="{{ url('storage/profile/'.$post->user->image) }}" alt="Generic placeholder image">
                        </div>
                        <div class="flex-grow-1">
                            <small class="text-muted">Posted By</small>
                            <a href=""><h6 class="font-size-14 my-1">{{ $post->user->name }}</h6></a>
                            <small class="text-muted">on {{ $post->created_at->toFormattedDateString() }}</small>
                        </div>
                    </div>

                    <h4 class="font-size-16">{{ $post->title }}</h4>
                    <p>{!! $post->body !!}</p>
                    <p>{{ $post->created_at->toFormattedDateString() }}</p>
                </div>

            </div>

        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div>
                            <h4 class="card-title">Categories</h4>
                            <div>
                                @foreach($post->categories as $category)
                                    <span class="badge bg-danger">{{ $category->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div>
                            <h4 class="card-title">Tags</h4>
                            <div>
                                @foreach ($post->tags as $tag)
                                    <span class="badge bg-info">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Images</h4>
                    <div class="">
                        <img src="{{ url('storage/post/'.$post->image) }}" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- end row -->
</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function approvePost(id){
            Swal.fire({
            title: "Are you sure?",
            text: "You want approve this post!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, approve it!"
        }).then((result) => {
            if (result.isConfirmed) {
            event.preventDefault();
            document.getElementById('approval-form').submit();

            }
        });
    }
</script>
@endsection


