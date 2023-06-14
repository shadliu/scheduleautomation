<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> @yield('title') - Assignment Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('Backend') }}/assets/images/favicon.ico">
        <!-- C3 charts css -->
        <link href="{{ asset('Backend') }}/assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />
        <!-- App css -->
        <link href="{{ asset('Backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- fontawesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <!-- Bootstrap summernote  -->
        <link rel="stylesheet" href="{{ asset('Backend') }}/plugins/summernote/summernote.css">
        <!-- Bootstrap fileupload css -->
        <link href="{{ 'Backend' }}/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet"/>
        <!-- Bootstrap toastr CSS -->
        <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" />
        <link href="{{ asset('Backend') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('Backend') }}/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('Backend') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="{{ asset('Backend') }}/assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{ route('admin.index') }}" class="logo">
                        <span>
                            <h4 class="text-white pt-2"><strong>Assignment project</strong></h4>
                        </span>
                        <i>
                            <img src="{{ asset('Backend') }}/assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                               {{ Auth::user()->name }}
                                <img src="{{ asset('assets/img/users') }}/{{ Auth::user()->profile_photo }}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! {{ Auth::user()->name }}</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="{{ route('admin.user.profile') }}" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="{{ route('admin.user.setting') }}" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                                <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                       <i class="zmdi zmdi-power"></i>   {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>

                            </div>
                        </li>
                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Assignment Project</li>
                            <li>
                                <a href="{{ route('admin.index') }}">
                                    <i class="fi-air-play"></i>  <span> Dashboard </span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="javascript: void(0);"><i class="far fa-question-circle"></i> <span>Customer queries</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('querstion.index') }}">View All</a></li>
                                </ul>
                            </li> --}}
                            <li>
                                <a href="javascript: void(0);"><i class="fi-head"></i> <span> Manage Users</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('users.index') }}">View All</a></li>
                                </ul>
                            </li>
                            {{-- <li>
                                <a href="javascript: void(0);"><i class="fa-solid fa-house-user"></i><span>Home rent request</span><span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('request.index') }}">Rental Consultancy</a></li>
                                </ul>
                            </li> --}}
                            
                            <li>
                                <a href="javascript: void(0);"><i class="fas fa-chevron-circle-left"></i> <span> Back Website</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('index') }}">Back Website</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fi-power"></i>   {{ __('Logout') }}
                                </a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">


                @yield('content')


                </div> <!-- content -->

                <footer class="footer text-right">
                    @php echo date('Y'); @endphp © Mohammad Nayem
                </footer>

            </div>


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{ asset('Backend') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('Backend') }}/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="{{ asset('Backend') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ asset('Backend') }}/assets/js/metisMenu.min.js"></script>
        <script src="{{ asset('Backend') }}/assets/js/waves.js"></script>
        <script src="{{ asset('Backend') }}/assets/js/jquery.slimscroll.js"></script>

        <!-- Counter js  -->
        <script src="{{ asset('Backend') }}/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="{{ asset('Backend') }}/plugins/counterup/jquery.counterup.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="{{ asset('Backend') }}/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="{{ asset('Backend') }}/plugins/c3/c3.min.js"></script>
        <script type="text/javascript" src="{{ asset('Backend') }}/plugins/summernote/summernote.min.js"></script>

        <!--Echart Chart-->
        <script src="{{ 'Backend' }}/plugins/echart/echarts-all.js"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('Backend') }}/assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="{{ asset('Backend') }}/assets/js/jquery.core.js"></script>
        <script src="{{ asset('Backend') }}/assets/js/jquery.app.js"></script>
        <!-- Bootstrap fileupload js -->
        <script src="{{ 'Backend' }}/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

        <!-- Toastr script CDN -->
        <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <!-- Toastr Scripts render -->
        {!! Notify::message() !!}
        {{-- All error show in Toaster --}}
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <script>
                toastr.error(`{!! $error !!}`, 'Error')
            </script>
            @endforeach
        @endif
        @yield('footer_script')

    </body>
</html>
