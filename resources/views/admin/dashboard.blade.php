@extends('layouts.backend.app')

@section('title','Dashboard')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Minible</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

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
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">152</span></h4>
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
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
                        <p class="text-muted mb-0">Pending </p>
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
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">45,254</span></h4>
                        <p class="text-muted mb-0">Approved</p>
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
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">2</span></h4>
                        <p class="text-muted mb-0">Total Users</p>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Site Analytics</h4>
                    <div class="mt-1">
                        <ul class="list-inline main-chart mb-0">
                            <li class="list-inline-item chart-border-left me-0 border-0">
                                <h3 class="text-primary"><span data-plugin="counterup">2,371</span><span class="text-muted d-inline-block font-size-15 ms-3">Comments</span></h3>
                            </li>
                            <li class="list-inline-item chart-border-left me-0">
                                <h3><span data-plugin="counterup">258</span><span class="text-muted d-inline-block font-size-15 ms-3">Likes</span>
                                </h3>
                            </li>
                            <li class="list-inline-item chart-border-left me-0">
                                <h3><span data-plugin="counterup">36</span><span class="text-muted d-inline-block font-size-15 ms-3">Views</span></h3>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-3">
                        <div id="sales-analytics-chart" data-colors='["--bs-primary", "#dfe2e6", "--bs-danger"]' class="apex-charts" dir="ltr"></div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <p class="text-white font-size-18">Enhance your <b>Functionality</b> for better interaction <i class="mdi mdi-arrow-right"></i></p>
                            <div class="mt-4">
                                <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Upgrade Now!</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mt-4 mt-sm-0">
                                <img src="assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Site Charts</h4>
                    <div class="row align-items-center g-0 mt-3">
                        <div class="col-sm-3">
                            <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> Views </p>
                        </div>

                        <div class="col-sm-9">
                            <div class="progress mt-1" style="height: 6px;">
                                <div class="progress-bar progress-bar bg-primary" role="progressbar"
                                    style="width: 52%" aria-valuenow="52" aria-valuemin="0"
                                    aria-valuemax="52">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row-->

                    <div class="row align-items-center g-0 mt-3">
                        <div class="col-sm-3">
                            <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-info me-2"></i> Comment </p>
                        </div>
                        <div class="col-sm-9">
                            <div class="progress mt-1" style="height: 6px;">
                                <div class="progress-bar progress-bar bg-info" role="progressbar"
                                    style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                                    aria-valuemax="45">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row-->

                    <div class="row align-items-center g-0 mt-3">
                        <div class="col-sm-3">
                            <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-success me-2"></i> Comments </p>
                        </div>
                        <div class="col-sm-9">
                            <div class="progress mt-1" style="height: 6px;">
                                <div class="progress-bar progress-bar bg-success" role="progressbar"
                                    style="width: 48%" aria-valuenow="48" aria-valuemin="0"
                                    aria-valuemax="48">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row-->



                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end Col -->
    </div> <!-- end row-->
</div> <!-- container-fluid -->

@endsection
