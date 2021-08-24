@extends('admin.admin_master')
@section('main_contant')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Oparetor List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Oparetors</a></li>
                                            <li class="breadcrumb-item active">Oparetor List</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            @foreach($oparetors as $oparetor)
                            <div class="col-xl-3 col-sm-6">
                                
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar-sm mx-auto mb-4">
                                            <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                                                D
                                            </span>
                                        </div>
                                        <h5 class="font-size-15"><a href="#" class="text-dark">{{$oparetor->first_name}}</a></h5>
                                        <h3 class="text-muted">{{$oparetor->department}}</h3>

                                        <div>
                                        <a href="#" class="badge badge-primary font-size-11 m-1">Oparetor</a>
                                        @if($oparetor->is_active =='1')
                                            <a href="#" class="badge badge-primary font-size-11 m-1">Active</a>
                                            @else
                                            <a href="#" class="badge badge-primary font-size-11 m-1">Suspend</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-top">
                                        <div class="contact-links d-flex font-size-20">
                                            <div class="flex-fill">
                                                <a href="" data-toggle="tooltip" data-placement="top" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="" data-toggle="tooltip" data-placement="top" title="Projects"><i class="bx bx-trash"></i></a>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="teacher_profile.html" data-toggle="tooltip" data-placement="top" title="Profile"><i class="bx bx-user-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            @endforeach
                        </div>
                        <!-- end row -->    
        
@endsection

           
