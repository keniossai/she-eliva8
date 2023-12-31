@extends('layouts.backend.app')

@section('title','Dashboard')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Dashboard </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $posts->count() }}</span></h4>
                        <p class="text-muted mb-0">Total Post</p>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="orders-chart" data-colors='["--bs-success"]'></div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ Auth::user()->favorite_posts->count() }}</span></h4>
                        <p class="text-muted mb-0">Tota Favorites </p>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="customers-chart" data-colors='["--bs-primary"]'> </div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $total_pending_posts }}</span></h4>
                        <p class="text-muted mb-0">Pending Post</p>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">

            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="growth-chart" data-colors='["--bs-warning"]'></div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $all_views }}</span></h4>
                        <p class="text-muted mb-0">All Views</p>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="table-responsive mb-4">
                            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Ranking List</th>
                                        <th>Title</th>
                                        <th>Views</th>
                                        <th>Favorites</th>
                                        <th>Comments</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($popular_posts as $key=>$post)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><a href="{{ route('author.post.show',$post->id) }}" class="text-reset  fw-bold">{{ \Illuminate\Support\Str::limit($post->title, '40') }}</a></td>
                                            <td>{{ $post->view_count }}</td>

                                            <td>
                                                {{ $post->favorite_to_user_count }}
                                            </td>
                                            <td>
                                                {{ $post->comments_count }}
                                            </td>
                                            <td>
                                                @if($post->is_approved == true)
                                                    <div class="badge bg-pill bg-success-subtle text-success font-size-12 px-2">Approved</div>
                                                @else
                                                    <div class="badge bg-pill bg-warning-subtle text-warning font-size-12 px-2">Pending</div>
                                                @endif
                                            </td>
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

@endsection
