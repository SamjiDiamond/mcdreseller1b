<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{env("TELECOM_NAME")}} - Admin</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="Admin Dashboard" name="description">
    <meta content="" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="../../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link href="../../plugins/lightpick/lightpick.css" rel="stylesheet">
    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Top Bar Start -->
<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left"><a href="#" class="logo"><span><img src="/images/logo.png" alt="logo-small" class="logo-sm"> </span><span><img src="/images/logo.png" alt="logo-large" class="logo-lg logo-light"> <img src="/images/logo.png" alt="logo-large" class="logo-lg"></span></a></div>
    <!--end logo--><!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="hidden-sm">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button" aria-haspopup="false" aria-expanded="false">English <img src="/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""> <i class="mdi mdi-chevron-down"></i></a>
            </li>
{{--            <li class="dropdown notification-list">--}}
{{--                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="ti-bell noti-icon"></i> <span class="badge badge-danger badge-pill noti-icon-badge">2</span></a>--}}
{{--                <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">--}}
{{--                    <h6 class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">Notifications <span class="badge badge-light badge-pill">2</span></h6>--}}
{{--                    <div class="slimscroll notification-list">--}}
{{--                        <!-- item-->--}}
{{--                        <a href="#" class="dropdown-item py-3">--}}
{{--                            <small class="float-right text-muted pl-2">2 min ago</small>--}}
{{--                            <div class="media">--}}
{{--                                <div class="avatar-md bg-primary"><i class="la la-cart-arrow-down text-white"></i></div>--}}
{{--                                <div class="media-body align-self-center ml-2 text-truncate">--}}
{{--                                    <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>--}}
{{--                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>--}}
{{--                                </div>--}}
{{--                                <!--end media-body-->--}}
{{--                            </div>--}}
{{--                            <!--end media-->--}}
{{--                        </a>--}}
{{--                        <!--end-item--><!-- item-->--}}
{{--                        <a href="#" class="dropdown-item py-3">--}}
{{--                            <small class="float-right text-muted pl-2">10 min ago</small>--}}
{{--                            <div class="media">--}}
{{--                                <div class="avatar-md bg-success"><i class="la la-group text-white"></i></div>--}}
{{--                                <div class="media-body align-self-center ml-2 text-truncate">--}}
{{--                                    <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>--}}
{{--                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>--}}
{{--                                </div>--}}
{{--                                <!--end media-body-->--}}
{{--                            </div>--}}
{{--                            <!--end media-->--}}
{{--                        </a>--}}
{{--                        <!--end-item--><!-- item-->--}}
{{--                        <a href="#" class="dropdown-item py-3">--}}
{{--                            <small class="float-right text-muted pl-2">40 min ago</small>--}}
{{--                            <div class="media">--}}
{{--                                <div class="avatar-md bg-pink"><i class="la la-list-alt text-white"></i></div>--}}
{{--                                <div class="media-body align-self-center ml-2 text-truncate">--}}
{{--                                    <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>--}}
{{--                                    <small class="text-muted mb-0">Dummy text of the printing.</small>--}}
{{--                                </div>--}}
{{--                                <!--end media-body-->--}}
{{--                            </div>--}}
{{--                            <!--end media-->--}}
{{--                        </a>--}}
{{--                        <!--end-item--><!-- item-->--}}
{{--                        <a href="#" class="dropdown-item py-3">--}}
{{--                            <small class="float-right text-muted pl-2">1 hr ago</small>--}}
{{--                            <div class="media">--}}
{{--                                <div class="avatar-md bg-warning"><i class="la la-truck text-white"></i></div>--}}
{{--                                <div class="media-body align-self-center ml-2 text-truncate">--}}
{{--                                    <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>--}}
{{--                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>--}}
{{--                                </div>--}}
{{--                                <!--end media-body-->--}}
{{--                            </div>--}}
{{--                            <!--end media-->--}}
{{--                        </a>--}}
{{--                        <!--end-item--><!-- item-->--}}
{{--                        <a href="#" class="dropdown-item py-3">--}}
{{--                            <small class="float-right text-muted pl-2">2 hrs ago</small>--}}
{{--                            <div class="media">--}}
{{--                                <div class="avatar-md bg-info"><i class="la la-check-circle text-white"></i></div>--}}
{{--                                <div class="media-body align-self-center ml-2 text-truncate">--}}
{{--                                    <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>--}}
{{--                                    <small class="text-muted mb-0">Dummy text of the printing.</small>--}}
{{--                                </div>--}}
{{--                                <!--end media-body-->--}}
{{--                            </div>--}}
{{--                            <!--end media-->--}}
{{--                        </a>--}}
{{--                        <!--end-item-->--}}
{{--                    </div>--}}
{{--                    <!-- All--> <a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i></a>--}}
{{--                </div>--}}
{{--            </li>--}}
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="/assets/images/users/user-1.png" alt="profile-user" class="rounded-circle"> </a>
{{--                <div class="dropdown-menu dropdown-menu-right">--}}
{{--                    <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a> <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a> <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a> <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Lock screen</a>--}}
{{--                    <div class="dropdown-divider mb-0"></div>--}}
{{--                    <a class="dropdown-item" href="#"><i class="ti-power-off text-muted mr-2"></i> Logout</a>--}}
{{--                </div>--}}
            </li>
        </ul>
        <!--end topbar-nav-->
        <ul class="list-unstyled topbar-nav mb-0">
            <li><button class="nav-link button-menu-mobile waves-effect waves-light"><i class="ti-menu nav-icon"></i></button></li>
            <li class="hide-phone app-search">
                <form role="search" class=""><input type="text" id="AllCompo" placeholder="Search..." class="form-control"> <a href="#"><i class="fas fa-search"></i></a></form>
            </li>
        </ul>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End --><!-- Left Sidenav -->
<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu">
        <li>
            <a href="/home"><i class="ti-bar-chart"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
        <li>
            <a href="/transactions"><i class="ti-server"></i><span>Transactions</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
        <li>
            <a href="/products"><i class="ti-crown"></i><span>Products</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
        <li>
            <a href="/attempts"><i class="ti-layers-alt"></i><span>Attempts</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
        <li>
            <a href="/logouts"><i class="ti-power-off"></i><span>Logout</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
    </ul>
</div>
<!-- end left-sidenav-->
<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right">
{{--                            <ol class="breadcrumb">--}}
{{--                                <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>--}}
{{--                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>--}}
{{--                                <li class="breadcrumb-item active">Sales</li>--}}
{{--                            </ol>--}}
                        </div>
                        <h4 class="page-title">Sales</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            @yield('content')

            <div class="row">
                <div class="col-lg-4"></div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!-- container -->
        <footer class="footer text-center text-sm-left">&copy; 2020 {{env('TELECOM_NAME')}} <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by 5Star Inn Company</span></footer>
        <!--end footer-->
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper --><!-- jQuery  --><script src="/assets/js/jquery.min.js"></script><script src="/assets/js/bootstrap.bundle.min.js"></script><script src="/assets/js/metismenu.min.js"></script><script src="/assets/js/waves.js"></script><script src="/assets/js/feather.min.js"></script><script src="/assets/js/jquery.slimscroll.min.js"></script><script src="/assets/js/jquery-ui.min.js"></script><script src="../../plugins/moment/moment.js"></script><script src="../../plugins/apexcharts/apexcharts.min.js"></script><script src="../../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script><script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script><script src="../../plugins/chartjs/chart.min.js"></script><script src="../../plugins/chartjs/roundedBar.min.js"></script><script src="../../plugins/lightpick/lightpick.js"></script><script src="/assets/pages/jquery.sales_dashboard.init.js"></script><!-- App js --><script src="/assets/js/app.js"></script>
</body>
</html>
