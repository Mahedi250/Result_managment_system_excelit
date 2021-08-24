<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <title>Result Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets\css\bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{asset('assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset('assets\css\app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

           <!-- header part start -->
           @include('admin.body.admin_header')
         <!-- header part end -->
            
        <!-- header part start -->
        @include('admin.body.admin_sidebar')
         <!-- header part end -->

          
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                     <!-- Main Content -->
               @yield('main_contant')
             <!-- end main content -->
                       

                      <!-- footer part start -->
                      @include('admin.body.admin_footer')
                      <!-- footer part end -->
                
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets\libs\jquery\jquery.min.js')}}"></script>
        <script src="{{asset('assets\libs\bootstrap\js\bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets\libs\metismenu\metisMenu.min.js')}}"></script>
        <script src="{{asset('assets\libs\simplebar\simplebar.min.js')}}"></script>
        <script src="{{asset('assets\libs\node-waves\waves.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('assets\libs\apexcharts\apexcharts.min.js')}}"></script>
        <!-- Saas dashboard init -->
        <script src="{{asset('assets\js\pages\saas-dashboard.init.js')}}"></script>

        <script src="{{asset('assets\js\app.js')}}"></script>

    </body>
</html>
