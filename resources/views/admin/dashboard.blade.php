@extends('/admin/index')
@section('main_contant')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
                       
            <div class="row">
                            <div class="col-xl-4">
                                <div class="card bg-soft-primary">
                                    <div>
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Welcome Back !</h5>
                                                    <p>Admin Dashboard</p>

                                                
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="assets\images\profile-img.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                                            <i class="bx bx-user"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-14 mb-0">Total Teacher</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4>1,452 <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                                                    <div class="d-flex">
                                                        <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ml-2 text-truncate">From previous period</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                                            <i class="bx bx-user"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-14 mb-0">Total Oparetor</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4>28,452 <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                                                    <div class="d-flex">
                                                        <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ml-2 text-truncate">From previous period</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                                            <i class="bx bx-user"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-14 mb-0">Total Student</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4>$ 16.2 <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                                                    
                                                    <div class="d-flex">
                                                        <span class="badge badge-soft-warning font-size-12"> 0% </span> <span class="ml-2 text-truncate">From previous period</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                                            <i class="bx bx-user"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-14 mb-0">Total Subject</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4>$ 16.2 <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                                                    
                                                    <div class="d-flex">
                                                        <span class="badge badge-soft-warning font-size-12"> 0% </span> <span class="ml-2 text-truncate">From previous period</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                                            <i class="bx bx-user"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-14 mb-0">Total Section</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4>$ 16.2 <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                                                    
                                                    <div class="d-flex">
                                                        <span class="badge badge-soft-warning font-size-12"> 0% </span> <span class="ml-2 text-truncate">From previous period</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Users Analytics</h4>

                                        <div>
                                            <div id="donut-chart" class="apex-charts"></div>
                                        </div>

                                        <div class="text-center text-muted">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary mr-1"></i>Teacher</p>
                                                        <h5>2,132</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success mr-1"></i>Oparetor</p>
                                                        <h5>1,763</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger mr-1"></i>Student</p>
                                                        <h5>$ 973</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->                       
                       


    @endsection