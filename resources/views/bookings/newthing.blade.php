@extends('dashboard.layouts.app')

@section('content')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                            <h4 class="mb-sm-0">CRM</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active">CRM</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card crm-widget">
                            <div class="card-body p-0">
                                <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                    <div class="col">
                                        <div class="py-4 px-3">
                                            <h5 class="text-muted text-uppercase fs-13">Campaign Sent <i class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i></h5>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-space-ship-line display-6 text-muted cfs-22"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h2 class="mb-0 cfs-22"><span class="counter-value" data-target="197">0</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col">
                                        <div class="mt-3 mt-md-0 py-4 px-3">
                                            <h5 class="text-muted text-uppercase fs-13">Annual Profit <i class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i></h5>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-exchange-dollar-line display-6 text-muted cfs-22"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h2 class="mb-0 cfs-22">$<span class="counter-value" data-target="489.4">0</span>k</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col">
                                        <div class="mt-3 mt-md-0 py-4 px-3">
                                            <h5 class="text-muted text-uppercase fs-13">Lead Conversation <i class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i></h5>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-pulse-line display-6 text-muted cfs-22"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h2 class="mb-0 cfs-22"><span class="counter-value" data-target="32.89">0</span>%</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col">
                                        <div class="mt-3 mt-lg-0 py-4 px-3">
                                            <h5 class="text-muted text-uppercase fs-13">Daily Average Income <i class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i></h5>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-trophy-line display-6 text-muted cfs-22"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h2 class="mb-0 cfs-22">$<span class="counter-value" data-target="1596.5">0</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col">
                                        <div class="mt-3 mt-lg-0 py-4 px-3">
                                            <h5 class="text-muted text-uppercase fs-13">Annual Deals <i class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i></h5>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-service-line display-6 text-muted cfs-22"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h2 class="mb-0 cfs-22"><span class="counter-value" data-target="2659">0</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xxl-3 col-md-6">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Sales Forecast</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Nov 2021<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Oct 2021</a>
                                            <a class="dropdown-item" href="#">Nov 2021</a>
                                            <a class="dropdown-item" href="#">Dec 2021</a>
                                            <a class="dropdown-item" href="#">Jan 2022</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body pb-0">
                                <div id="sales-forecast-chart" data-colors='["--vz-primary", "--vz-success", "--vz-warning"]' data-colors-minimal='["--vz-primary-rgb, 0.75", "--vz-primary", "--vz-primary-rgb, 0.55"]' data-colors-creative='["--vz-primary", "--vz-secondary", "--vz-info"]' data-colors-corporate='["--vz-primary", "--vz-success", "--vz-secondary"]' data-colors-galaxy='["--vz-primary", "--vz-secondary", "--vz-info"]' data-colors-classic='["--vz-primary", "--vz-warning", "--vz-secondary"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Deal Type</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Monthly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Weekly</a>
                                            <a class="dropdown-item" href="#">Monthly</a>
                                            <a class="dropdown-item" href="#">Yearly</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body pb-0">
                                <div id="deal-type-charts" data-colors='["--vz-warning", "--vz-danger", "--vz-success"]' data-colors-minimal='["--vz-primary-rgb, 0.15", "--vz-primary-rgb, 0.35", "--vz-primary-rgb, 0.45"]' data-colors-modern='["--vz-warning", "--vz-secondary", "--vz-success"]' data-colors-interactive='["--vz-warning", "--vz-info", "--vz-primary"]' data-colors-corporate='["--vz-secondary", "--vz-info", "--vz-success"]' data-colors-classic='["--vz-secondary", "--vz-danger", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xxl-6">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Balance Overview</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Current Year<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body px-0">
                                <ul class="list-inline main-chart text-center mb-0">
                                    <li class="list-inline-item chart-border-left me-0 border-0">
                                        <h4 class="text-primary">$584k <span class="text-muted d-inline-block fs-13 align-middle ms-2">Revenue</span></h4>
                                    </li>
                                    <li class="list-inline-item chart-border-left me-0">
                                        <h4>$497k<span class="text-muted d-inline-block fs-13 align-middle ms-2">Expenses</span>
                                        </h4>
                                    </li>
                                    <li class="list-inline-item chart-border-left me-0">
                                        <h4><span data-plugin="counterup">3.6</span>%<span class="text-muted d-inline-block fs-13 align-middle ms-2">Profit Ratio</span></h4>
                                    </li>
                                </ul>

                                <div id="revenue-expenses-charts" data-colors='["--vz-success", "--vz-danger"]' data-colors-minimal='["--vz-primary", "--vz-info"]' data-colors-interactive='["--vz-info", "--vz-primary"]' data-colors-galaxy='["--vz-primary", "--vz-secondary"]' data-colors-classic='["--vz-primary", "--vz-secondary"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-7">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Deals Status</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">02 Nov 2021 to 31 Dec 2021<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-borderless table-hover table-nowrap align-middle mb-0">
                                        <thead class="table-light">
                                        <tr class="text-muted">
                                            <th scope="col">Name</th>
                                            <th scope="col" style="width: 20%;">Last Contacted</th>
                                            <th scope="col">Sales Representative</th>
                                            <th scope="col" style="width: 16%;">Status</th>
                                            <th scope="col" style="width: 12%;">Deal Value</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>Absternet LLC</td>
                                            <td>Sep 20, 2021</td>
                                            <td><img src="{{asset('assets/velzor/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2 material-shadow">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Donald Risher</a>
                                            </td>
                                            <td><span class="badge bg-success-subtle text-success p-2">Deal Won</span></td>
                                            <td>
                                                <div class="text-nowrap">$100.1K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raitech Soft</td>
                                            <td>Sep 23, 2021</td>
                                            <td><img src="{{asset('assets/velzor/images/users/avatar-2.jpg')}}" alt="" class="avatar-xs rounded-circle me-2 material-shadow">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Sofia Cunha</a>
                                            </td>
                                            <td><span class="badge bg-warning-subtle text-warning p-2">Intro Call</span></td>
                                            <td>
                                                <div class="text-nowrap">$150K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>William PVT</td>
                                            <td>Sep 27, 2021</td>
                                            <td><img src="{{asset('assets/velzor/images/users/avatar-3.jpg')}}" alt="" class="avatar-xs rounded-circle me-2 material-shadow">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Luis Rocha</a>
                                            </td>
                                            <td><span class="badge bg-danger-subtle text-danger p-2">Stuck</span></td>
                                            <td>
                                                <div class="text-nowrap">$78.18K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Loiusee LLP</td>
                                            <td>Sep 30, 2021</td>
                                            <td><img src="{{asset('assets/velzor/images/users/avatar-4.jpg')}}" alt="" class="avatar-xs rounded-circle me-2 material-shadow">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Vitoria Rodrigues</a>
                                            </td>
                                            <td><span class="badge bg-success-subtle text-success p-2">Deal Won</span></td>
                                            <td>
                                                <div class="text-nowrap">$180K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Apple Inc.</td>
                                            <td>Sep 30, 2021</td>
                                            <td><img src="{{asset('assets/velzor/images/users/avatar-6.jpg')}}" alt="" class="avatar-xs rounded-circle me-2 material-shadow">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Vitoria Rodrigues</a>
                                            </td>
                                            <td><span class="badge bg-info-subtle text-info p-2">New Lead</span></td>
                                            <td>
                                                <div class="text-nowrap">$78.9K</div>
                                            </td>
                                        </tr>
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div><!-- end table responsive -->
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-5">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">My Tasks</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted"><i class="ri-settings-4-line align-bottom me-1 fs-15"></i>Settings</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body p-0">

                                <div class="align-items-center p-3 justify-content-between d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="text-muted"><span class="fw-semibold">4</span> of <span class="fw-semibold">10</span> remaining</div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-success"><i class="ri-add-line align-middle me-1"></i> Add Task</button>
                                </div><!-- end card header -->

                                <div data-simplebar style="max-height: 219px;">
                                    <ul class="list-group list-group-flush border-dashed px-3">
                                        <li class="list-group-item ps-0">
                                            <div class="d-flex align-items-start">
                                                <div class="form-check ps-0 flex-sharink-0">
                                                    <input type="checkbox" class="form-check-input ms-0" id="task_one">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <label class="form-check-label mb-0 ps-2" for="task_one">Review and make sure nothing slips through cracks</label>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <p class="text-muted fs-12 mb-0">15 Sep, 2021</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item ps-0">
                                            <div class="d-flex align-items-start">
                                                <div class="form-check ps-0 flex-sharink-0">
                                                    <input type="checkbox" class="form-check-input ms-0" id="task_two">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <label class="form-check-label mb-0 ps-2" for="task_two">Send meeting invites for sales upcampaign</label>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <p class="text-muted fs-12 mb-0">20 Sep, 2021</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item ps-0">
                                            <div class="d-flex align-items-start">
                                                <div class="form-check flex-sharink-0 ps-0">
                                                    <input type="checkbox" class="form-check-input ms-0" id="task_three">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <label class="form-check-label mb-0 ps-2" for="task_three">Weekly closed sales won checking with sales team</label>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <p class="text-muted fs-12 mb-0">24 Sep, 2021</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item ps-0">
                                            <div class="d-flex align-items-start">
                                                <div class="form-check ps-0 flex-sharink-0">
                                                    <input type="checkbox" class="form-check-input ms-0" id="task_four">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <label class="form-check-label mb-0 ps-2" for="task_four">Add notes that can be viewed from the individual view</label>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <p class="text-muted fs-12 mb-0">27 Sep, 2021</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item ps-0">
                                            <div class="d-flex align-items-start">
                                                <div class="form-check ps-0 flex-sharink-0">
                                                    <input type="checkbox" class="form-check-input ms-0" id="task_five">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <label class="form-check-label mb-0 ps-2" for="task_five">Move stuff to another page</label>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <p class="text-muted fs-12 mb-0">27 Sep, 2021</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item ps-0">
                                            <div class="d-flex align-items-start">
                                                <div class="form-check ps-0 flex-sharink-0">
                                                    <input type="checkbox" class="form-check-input ms-0" id="task_six">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <label class="form-check-label mb-0 ps-2" for="task_six">Styling wireframe design and documentation for velzon admin</label>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <p class="text-muted fs-12 mb-0">27 Sep, 2021</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul><!-- end ul -->
                                </div>
                                <div class="p-3 pt-2">
                                    <a href="javascript:void(0);" class="text-muted text-decoration-underline">Show more...</a>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xxl-5">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Upcoming Activities</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body pt-0">
                                <ul class="list-group list-group-flush border-dashed">
                                    <li class="list-group-item ps-0">
                                        <div class="row align-items-center g-3">
                                            <div class="col-auto">
                                                <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 material-shadow">
                                                    <div class="text-center">
                                                        <h5 class="mb-0">25</h5>
                                                        <div class="text-muted">Tue</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="text-muted mt-0 mb-1 fs-13">12:00am - 03:30pm</h5>
                                                <a href="#" class="text-reset fs-14 mb-0">Meeting for campaign with sales team</a>
                                            </div>
                                            <div class="col-sm-auto">
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Stine Nielsen">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Jansh Brown">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dan Gibson">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-3.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);">
                                                            <div class="avatar-xxs">
                                                                    <span class="avatar-title rounded-circle bg-info text-white">
                                                                        5
                                                                    </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </li><!-- end -->
                                    <li class="list-group-item ps-0">
                                        <div class="row align-items-center g-3">
                                            <div class="col-auto">
                                                <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 material-shadow">
                                                    <div class="text-center">
                                                        <h5 class="mb-0">20</h5>
                                                        <div class="text-muted">Wed</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="text-muted mt-0 mb-1 fs-13">02:00pm - 03:45pm</h5>
                                                <a href="#" class="text-reset fs-14 mb-0">Adding a new event with attachments</a>
                                            </div>
                                            <div class="col-sm-auto">
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frida Bang">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Malou Silva">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Simon Schmidt">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-6.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tosh Jessen">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-7.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);">
                                                            <div class="avatar-xxs">
                                                                    <span class="avatar-title rounded-circle bg-success text-white">
                                                                        3
                                                                    </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </li><!-- end -->
                                    <li class="list-group-item ps-0">
                                        <div class="row align-items-center g-3">
                                            <div class="col-auto">
                                                <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 material-shadow">
                                                    <div class="text-center">
                                                        <h5 class="mb-0">17</h5>
                                                        <div class="text-muted">Wed</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="text-muted mt-0 mb-1 fs-13">04:30pm - 07:15pm</h5>
                                                <a href="#" class="text-reset fs-14 mb-0">Create new project Bundling Product</a>
                                            </div>
                                            <div class="col-sm-auto">
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Nina Schmidt">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-8.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Stine Nielsen">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Jansh Brown">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);">
                                                            <div class="avatar-xxs">
                                                                    <span class="avatar-title rounded-circle bg-primary text-white">
                                                                        4
                                                                    </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </li><!-- end -->
                                    <li class="list-group-item ps-0">
                                        <div class="row align-items-center g-3">
                                            <div class="col-auto">
                                                <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 material-shadow">
                                                    <div class="text-center">
                                                        <h5 class="mb-0">12</h5>
                                                        <div class="text-muted">Tue</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="text-muted mt-0 mb-1 fs-13">10:30am - 01:15pm</h5>
                                                <a href="#" class="text-reset fs-14 mb-0">Weekly closed sales won checking with sales team</a>
                                            </div>
                                            <div class="col-sm-auto">
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Stine Nielsen">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Jansh Brown">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dan Gibson">
                                                            <img src="{{asset('assets/velzor/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item material-shadow">
                                                        <a href="javascript: void(0);">
                                                            <div class="avatar-xxs">
                                                                    <span class="avatar-title rounded-circle bg-warning text-white">
                                                                        9
                                                                    </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </li><!-- end -->
                                </ul><!-- end -->
                                <div class="align-items-center mt-2 row g-3 text-center text-sm-start">
                                    <div class="col-sm">
                                        <div class="text-muted">Showing<span class="fw-semibold">4</span> of <span class="fw-semibold">125</span> Results
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <ul class="pagination pagination-separated pagination-sm justify-content-center justify-content-sm-start mb-0">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link">←</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">→</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xxl-7">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Closing Deals</h4>
                                <div class="flex-shrink-0">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected="">Closed Deals</option>
                                        <option value="1">Active Deals</option>
                                        <option value="2">Paused Deals</option>
                                        <option value="3">Canceled Deals</option>
                                    </select>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-nowrap align-middle mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col" style="width: 30%;">Deal Name</th>
                                            <th scope="col" style="width: 30%;">Sales Rep</th>
                                            <th scope="col" style="width: 20%;">Amount</th>
                                            <th scope="col" style="width: 20%;">Close Date</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>Acme Inc Install</td>
                                            <td><img src="{{asset('assets/velzor/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2 material-shadow">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Donald Risher</a>
                                            </td>
                                            <td>$96k</td>
                                            <td>Today</td>
                                        </tr>
                                        <tr>
                                            <td>Save lots Stores</td>
                                            <td><img src="{{asset('assets/velzor/images/users/avatar-2.jpg')}}" alt="" class="avatar-xs rounded-circle me-2 material-shadow">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Jansh Brown</a>
                                            </td>
                                            <td>$55.7k</td>
                                            <td>30 Dec 2021</td>
                                        </tr>
                                        <tr>
                                            <td>William PVT</td>
                                            <td><img src="{{asset('assets/velzor/images/users/avatar-7.jpg')}}" alt="" class="avatar-xs rounded-circle me-2 material-shadow">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Ayaan Hudda</a>
                                            </td>
                                            <td>$102k</td>
                                            <td>25 Nov 2021</td>
                                        </tr>
                                        <tr>
                                            <td>Raitech Soft</td>
                                            <td><img src="{{asset('assets/velzor/images/users/avatar-4.jpg')}}" alt="" class="avatar-xs rounded-circle me-2 material-shadow">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Julia William</a>
                                            </td>
                                            <td>$89.5k</td>
                                            <td>20 Sep 2021</td>
                                        </tr>
                                        <tr>
                                            <td>Absternet LLC</td>
                                            <td><img src="{{asset('assets/velzor/images/users/avatar-4.jpg')}}" alt="" class="avatar-xs rounded-circle me-2 material-shadow">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Vitoria Rodrigues</a>
                                            </td>
                                            <td>$89.5k</td>
                                            <td>20 Sep 2021</td>
                                        </tr>
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div><!-- end table responsive -->
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection






























{{--
@extends('admin.layout.app')

@section('custom-css')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection

@section('toolbar')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
            <!--begin::Toolbar container-->
            <div class="d-flex flex-column flex-row-fluid">
                <!--begin::Toolbar wrapper-->
                <div class="d-flex align-items-center pt-1">
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-white fw-bold lh-1">
                            <a href="index.html" class="text-white text-hover-primary">
                                <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-white fw-bold lh-1">Dashboard</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Toolbar wrapper=-->
                <!--begin::Toolbar wrapper=-->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-13 pb-6">
                    <!--begin::Page title-->
                    <div class="page-title me-5">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-white fw-bold fs-2 flex-column justify-content-center my-0">Welcome Back, {{ucfirst(\Illuminate\Support\Facades\Auth::user()->first_name)}}
                            <!--begin::Description-->
                            <span class="page-desc text-gray-600 fw-semibold fs-6 pt-3">Company Description</span>
                            <!--end::Description--></h1>

                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Stats-->
                    <div class="d-flex align-self-center flex-center flex-shrink-0">
                        <a href="#" class="btn btn-flex btn-sm btn-outline btn-active-color-primary btn-custom px-4" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                            <i class="ki-outline ki-plus-square fs-4 me-2"></i>Invite</a>
                        <a href="#" class="btn btn-sm btn-active-color-primary btn-outline btn-custom ms-3 px-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Set Your Target</a>
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Toolbar wrapper=-->
            </div>
            <!--end::Toolbar container=-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
@endsection
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                --}}
{{--<!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Misc Widget 1-->
                    <div class="row mb-5 mb-xl-8 g-5 g-xl-8">
                       --}}{{--
--}}
{{-- <!--begin::Col-->
                        <div class="col-6">
                            <!--begin::Card-->
                            <a class="card flex-column justfiy-content-start align-items-start text-start w-100 text-gray-800 text-hover-primary p-10" href="account/overview.html">
                                <i class="ki-outline ki-gift fs-2tx mb-5 ms-n1 text-gray-500"></i>
                                <span class="fs-4 fw-bold">Total Companies</span>
                            </a>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->--}}{{--
--}}
{{--

                    </div>
                </div>
                <!--end::Col-->--}}{{--


                --}}
{{-- <div class="row g-5 g-xl-8">
                     <div class="col-xl-3">
                         <!--begin::Statistics Widget 5-->
                         <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
                             <!--begin::Body-->
                             <div class="card-body">
                                 <i class="ki-outline ki-chart-simple text-primary fs-2x ms-n1"></i>
                                 <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">500M$</div>
                                 <div class="fw-semibold text-gray-400">SAP UI Progress</div>
                             </div>
                             <!--end::Body-->
                         </a>
                         <!--end::Statistics Widget 5-->
                     </div>
                     <div class="col-xl-3">
                         <!--begin::Statistics Widget 5-->
                         <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                             <!--begin::Body-->
                             <div class="card-body">
                                 <i class="ki-outline ki-cheque text-gray-100 fs-2x ms-n1"></i>
                                 <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">+3000</div>
                                 <div class="fw-semibold text-gray-100">New Customers</div>
                             </div>
                             <!--end::Body-->
                         </a>
                         <!--end::Statistics Widget 5-->
                     </div>
                     <div class="col-xl-3">
                         <!--begin::Statistics Widget 5-->
                         <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                             <!--begin::Body-->
                             <div class="card-body">
                                 <i class="ki-outline ki-briefcase text-white fs-2x ms-n1"></i>
                                 <div class="text-white fw-bold fs-2 mb-2 mt-5">$50,000</div>
                                 <div class="fw-semibold text-white">Milestone Reached</div>
                             </div>
                             <!--end::Body-->
                         </a>
                         <!--end::Statistics Widget 5-->
                     </div>
                     <div class="col-xl-3">
                         <!--begin::Statistics Widget 5-->
                         <a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
                             <!--begin::Body-->
                             <div class="card-body">
                                 <i class="ki-outline ki-chart-pie-simple text-white fs-2x ms-n1"></i>
                                 <div class="text-white fw-bold fs-2 mb-2 mt-5">$50,000</div>
                                 <div class="fw-semibold text-white">Milestone Reached</div>
                             </div>
                             <!--end::Body-->
                         </a>
                         <!--end::Statistics Widget 5-->
                     </div>
                 </div>--}}{{--


                <div class="row g-5 xl-8">
                    <div class="col-xl-3">
                        <a href="{{route('admin.companies.index')}}" class="card bg-body hoverable mb-5">
                            <div class="card-body">
                                <i class="ki-outline ki-chart-simple text-primary fs-2x ms-n1"></i>
                                <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">Total Companies</div>
                                <div class="fw-semibold text-black-400">{{ $totalcompanies }} Company</div>
                            </div>
                        </a>
                        <a href="#" class="card bg-dark hoverable mb-5">
                            <div class="card-body">
                                <i class="ki-outline ki-cheque text-gray-100 fs-2x ms-n1"></i>
                                <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">Total Vehicles</div>
                                <div class="fw-semibold text-gray-100">{{$totalvehicles}} Vehicles</div>
                            </div>
                        </a>

                        <a href="#" class="card bg-warning hoverable mb-5">
                            <div class="card-body">
                                <i class="ki-outline ki-briefcase text-white fs-2x ms-n1"></i>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Total Active Bookings</div>
                                <div class="fw-semibold text-white">{{$active_bookings}} Active Bookings</div>
                            </div>
                        </a>

                        <!-- Card 4 -->
                        <a href="#" class="card bg-info hoverable">
                            <div class="card-body">
                                <i class="ki-outline ki-chart-pie-simple text-white fs-2x ms-n1"></i>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Total Completed Bookings</div>
                                <div class="fw-semibold text-white">{{$completed_bookings}} Completed Bookings</div>
                            </div>
                        </a>
                    </div>
                </div>

                <!--begin::Col-->
                <div class="col-xl-8 ps-xl-12">
                    <!--begin::Engage widget 1-->
                    <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px bg-body mb-5 mb-xl-8" style="background-position: 100% 50px;background-size: 500px auto;background-image:url('{{ asset('metronic/assets/media/misc/city.png') }}')" dir="ltr">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column justify-content-center ps-lg-12">
                            <!--begin::Title-->
                            <h3 class="text-gray-900 fs-2qx fw-bold mb-7">We are working
                                <br />to boost lovely mood</h3>
                            <!--end::Title-->
                            <!--begin::Action-->
                            <div class="m-0">
                                <a href='#' class="btn btn-dark fw-semibold px-6 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create a Store</a>
                            </div>
                            <!--begin::Action-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 1-->
                    <!--begin::Tables Widget 5-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Latest Products</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">More than 400 new products</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1 active" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/plurk.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                                    <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">React, HTML</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/telegram.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
                                                    <span class="text-muted fw-semibold d-block">Most Successful</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/vimeo.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New Users</a>
                                                    <span class="text-muted fw-semibold d-block">Awesome Users</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Laravel,Metronic</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-primary">Success</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/bebo.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
                                                    <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-danger">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/kickstarter.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Bestseller Theme</a>
                                                    <span class="text-muted fw-semibold d-block">Best Customers</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/plurk.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                                    <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">React, HTML</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/telegram.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
                                                    <span class="text-muted fw-semibold d-block">Most Successful</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/bebo.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
                                                    <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-danger">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/kickstarter.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Bestseller Theme</a>
                                                    <span class="text-muted fw-semibold d-block">Best Customers</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/bebo.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
                                                    <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-danger">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/vimeo.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New Users</a>
                                                    <span class="text-muted fw-semibold d-block">Awesome Users</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Laravel,Metronic</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-primary">Success</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('metronic/assets/media/svg/brand-logos/telegram.svg') }}" class="h-50 align-self-center" alt="" />
                                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
                                                    <span class="text-muted fw-semibold d-block">Most Successful</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 5-->
                    <div class="card card-flush">
                        <div class="card-header pt-5">
                            <h3 class="card-title">Bookings Distribution</h3>
                        </div>
                        <div class="card-body">
                            <div id="bookings_pie_chart" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content-->
    </div>
@endsection

@section('custom-js')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('metronic/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('metronic/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('metronic/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('metronic/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('metronic/assets/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('metronic/assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('metronic/assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var options = {
                series: [540, 380, 120], // Example data: Active, Completed, Canceled
                chart: {
                    type: 'pie',
                    height: 350
                },
                labels: ['Active', 'Completed', 'Canceled'],
                colors: ['#00C851', '#007bff', '#ff4444'], // Green, Blue, Red
                legend: {
                    position: 'bottom'
                },
                dataLabels: {
                    enabled: true,
                    formatter: function (val, opts) {
                        return opts.w.globals.labels[opts.seriesIndex] + ": " + val.toFixed(1) + "%";
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#bookings_pie_chart"), options);
            chart.render();
        });
    </script>
@endsection
--}}



