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
                        <h4 class="mb-1 mt-1">$<span data-plugin="counterup">34,152</span></h4>
                        <p class="text-muted mb-0">Total Revenue</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="orders-chart" data-colors='["--bs-success"]'> </div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
                        <p class="text-muted mb-0">Orders</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                    </p>
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
                        <p class="text-muted mb-0">Customers</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                    </p>
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
                        <h4 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h4>
                        <p class="text-muted mb-0">Growth</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                    </p>
                </div>
            </div>
        </div> <!-- end col-->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div>
                            <button type="button" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus me-1"></i> Add customers</button>
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
                                        <th style="width: 120px;">Customer ID</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                        <th>Join Date</th>
                                        <th>Status</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck1">
                                                <label class="form-check-label" for="customercheck1"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0123</a> </td>
                                        <td>
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                            <span>William Shipp</span>
                                        </td>
                                        <td>WilliamShipp@jourrapide.com</td>

                                        <td>
                                            14 Apr, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-success-subtle text-success font-size-12">Active</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck2">
                                                <label class="form-check-label" for="customercheck2"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0122</a> </td>
                                        <td>
                                            <div class="avatar-xs d-inline-block me-2">
                                                <span class="avatar-title rounded-circle bg-light text-body">
                                                    J
                                                </span>
                                            </div>
                                            <span>Joe Hardy</span>
                                        </td>
                                        <td>JoeHardy@dayrep.com</td>

                                        <td>
                                            14 Apr, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-success-subtle text-success font-size-12">Active</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck3">
                                                <label class="form-check-label" for="customercheck3"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0121</a> </td>
                                        <td>
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                            <span>Thomas Hankins</span>
                                        </td>
                                        <td>ThomasHankins@dayrep.com</td>

                                        <td>
                                            13 Apr, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-success-subtle text-success font-size-12">Active</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck4">
                                                <label class="form-check-label" for="customercheck4"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0120</a> </td>
                                        <td>
                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                            <span>Mary Frazier</span>
                                        </td>
                                        <td>MaryFrazier@armyspy.com</td>

                                        <td>
                                            12 Apr, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-danger-subtle text-danger font-size-12">Deactive</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck5">
                                                <label class="form-check-label" for="customercheck5"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0119</a> </td>
                                        <td>
                                            <div class="avatar-xs d-inline-block me-2">
                                                <span class="avatar-title rounded-circle bg-light text-body">
                                                    S
                                                </span>
                                            </div>
                                            <span>Sam Perry</span>
                                        </td>
                                        <td>SamPerry@rhyta.com</td>

                                        <td>
                                            12 Apr, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-success-subtle text-success font-size-12">Active</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck6">
                                                <label class="form-check-label" for="customercheck6"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0118</a> </td>
                                        <td>
                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                            <span>Muriel Myers</span>
                                        </td>
                                        <td>MurielMyers@rhyta.com</td>

                                        <td>
                                            09 Apr, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-danger-subtle text-danger font-size-12">Deactive</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck7">
                                                <label class="form-check-label" for="customercheck7"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0117</a> </td>
                                        <td>
                                            <div class="avatar-xs d-inline-block me-2">
                                                <span class="avatar-title rounded-circle bg-light text-body">
                                                    J
                                                </span>
                                            </div>
                                            <span>Jessie Jacobs</span>
                                        </td>
                                        <td>JessieJacobs@teleworm.us</td>

                                        <td>
                                            09 Apr, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-success-subtle text-success  font-size-12">Active</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck8">
                                                <label class="form-check-label" for="customercheck8"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0116</a> </td>
                                        <td>
                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                            <span>Edward King</span>
                                        </td>
                                        <td>EdwardKing@teleworm.us</td>

                                        <td>
                                            08 Apr, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-success-subtle text-success font-size-12">Active</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck9">
                                                <label class="form-check-label" for="customercheck9"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0115</a> </td>
                                        <td>
                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                            <span>Stacy Webster</span>
                                        </td>
                                        <td>StacyWebster@armyspy.com</td>

                                        <td>
                                            07 Apr, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-danger-subtle text-danger font-size-12">Deactive</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck10">
                                                <label class="form-check-label" for="customercheck10"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0114</a> </td>
                                        <td>
                                            <div class="avatar-xs d-inline-block me-2">
                                                <span class="avatar-title rounded-circle bg-light text-body">
                                                    A
                                                </span>
                                            </div>
                                            <span>Amy McDonald</span>
                                        </td>
                                        <td>AmyMcDonald@jourrapide.com</td>

                                        <td>
                                            05 Apr, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-success-subtle text-success font-size-12">Active</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck11">
                                                <label class="form-check-label" for="customercheck11"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0113</a> </td>
                                        <td>
                                            <div class="avatar-xs d-inline-block me-2">
                                                <span class="avatar-title rounded-circle bg-light text-body">
                                                    T
                                                </span>
                                            </div>
                                            <span>Terry Brown</span>
                                        </td>
                                        <td>TerryBrown@dayrep.com</td>

                                        <td>
                                            02 Apr, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-success-subtle text-success font-size-12">Active</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="customercheck12">
                                                <label class="form-check-label" for="customercheck12"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-reset  fw-bold">#MN0112</a> </td>
                                        <td>
                                            <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                            <span>Crissy Holland</span>
                                        </td>
                                        <td>CrissyHolland@armyspy.com</td>

                                        <td>
                                            23 Mar, 2020
                                        </td>
                                        <td>
                                            <div class="badge bg-pill bg-danger-subtle text-danger font-size-12">Deactive</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
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
