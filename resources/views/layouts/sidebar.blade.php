<!-- Preloader Animation -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('img/Project Logo.png') }}" alt="AdminLTELogo" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            @if(Auth::user()->is_role == '1')
                <a href="{{ url('admin/dashboard') }}" class="nav-link">Home</a>
            @elseif(Auth::user()->is_role == '0')
                <a href="{{ url('employee/dashboard') }}" class="nav-link">Home</a>
            @endif
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <!--Logout-->
            <a class="nav-link" href=" {{ url('logout') }} ">
                <i class="fas fa-sign-out-alt"></i>
            </a>

        </li>

    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

            <!---Admin Site-->
            @if(Auth::user()->is_role == '1')
                <a href="{{ url('admin/dashboard') }}" class="brand-link">
                    <!--Logo-->
                    <!--Remember Change to white-->
                    <img src="{{ asset('img/Project Logo - White.png') }}" alt="HR System Logo" class="brand-image img-circle elevation-3" style="opacity: 1;">
                    <span class="brand-text font-weight-light">HR System</span>
                </a>
            @endif

                    <!--Employee Site-->
            @if(Auth::user()->is_role == '0')
                <a href="{{ url('employee/dashboard') }}" class="brand-link">
                    <!--Logo-->
                    <!--Remember Change to white-->
                    <img src="{{ asset('img/Project Logo - White.png') }}" alt="HR System Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
                    <span class="brand-text font-weight-light">HR System</span>
                </a>
             @endif



    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <!--Profile Picture-->
            <div class="image">
                @if(Auth::user()->profile_picture)
                        <img src="{{ asset('img/profile_picture/'.Auth::user()->profile_picture) }}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>

            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <!--Admin Dashboard-->
                @if(Auth::user()->is_role == '1')

                <li class="nav-item">
                    <a href=" {{ url('admin/dashboard') }} " class="nav-link
                    @if(Request::segment(2) == 'dashboard') active @endif">
                        <i class="nav-icon fa fa-home"></i>
                        <!--Segment means the link director if (1) it will active by /admin link if (2) will detect dashboard-->
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <!--Employee-->

                <li class="nav-header">EMPLOYEE</li>

                <li class="nav-item">
                    <a href=" {{ url('admin/employees') }} " class="nav-link
                    @if(Request::segment(2) == 'employees') active @endif">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Employees
                        </p>
                    </a>
                </li>


                <!--Department-->

                    <li class="nav-item">
                        <a href=" {{ url('admin/department') }} " class="nav-link
                    @if(Request::segment(2) == 'department') active @endif">
                            <i class="nav-icon fa-regular fa-building"></i>
                            <p>
                                Department
                            </p>
                        </a>
                    </li>

                    <!--Position-->

                    <li class="nav-item">
                        <a href=" {{ url('admin/position') }} " class="nav-link
                    @if(Request::segment(2) == 'position') active @endif">
                            <i class="nav-icon fa-solid fa-user-plus"></i>
                            <p>
                                Position
                            </p>
                        </a>
                    </li>

                <!--Payroll-->

                    <li class="nav-header">PAYROLL</li>

                <li class="nav-item">
                    <a href=" {{ url('admin/payroll') }} " class="nav-link
                    @if(Request::segment(2) == 'payroll') active @endif">
                        <i class="nav-icon fa fa-money-bill"></i>
                        <p>
                            Payroll
                        </p>
                    </a>
                </li>

                    <!--Attendance-->

                    <li class="nav-header">ATTENDANCE</li>

                    <li class="nav-item">
                        <a href=" {{ url('admin/attendance') }} " class="nav-link
                    @if(Request::segment(2) == 'attendance') active @endif">
                            <i class=" nav-icon fa-solid fa-user-clock"></i>
                            <p>
                                Attendance
                            </p>
                        </a>
                    </li>

                    <!--Leave-->

                    <li class="nav-header">LEAVE</li>

                    <li class="nav-item">
                        <a href=" {{ url('admin/leave/pending') }} " class="nav-link
                           @if(Request::segment(3) == 'pending') active @endif">
                        <i class="nav-icon fa fa-calendar-alt"></i>
                        <p>
                            Leave
                        </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href=" {{ url('admin/leave/history') }} " class="nav-link
                           @if(Request::segment(3) == 'history') active @endif">
                            <i class="nav-icon fa fa-user-clock"></i>
                            <p>
                                Leave History
                            </p>
                        </a>
                    </li>

                    <!--Forum-->

                    <li class="nav-header">FORUM</li>

                    <li class="nav-item">
                        <a href=" {{ url('admin/forum') }} " class="nav-link
                           @if(Request::segment(2) == 'forum') active @endif">
                            <i class="nav-icon fa fa-comment"></i>
                            <p>
                                Forum
                            </p>
                        </a>
                    </li>

                    <!--Settings-->

                    <li class="nav-header">SETTINGS</li>

                    <li class="nav-item">
                        <a href=" {{ url('admin/profile') }} " class="nav-link
                    @if(Request::segment(2) == 'profile') active @endif">
                            <i class="nav-icon fa-regular fa-id-card"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href=" {{ url('admin/change_password') }} " class="nav-link
                    @if(Request::segment(2) == 'change_password') active @endif">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>
                                Change Password
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href=" {{ url('admin/change_profile_picture') }} " class="nav-link
                    @if(Request::segment(2) == 'change_profile_picture') active @endif">
                            <i class="nav-icon fa-regular fa-id-badge"></i>
                            <p>
                                Change Profile Picture
                            </p>
                        </a>
                    </li>

                @endif

                <!--Employee Dashboard-->
                @if(Auth::user()->is_role == '0')

                    <li class="nav-item">
                        <a href=" {{ url('employee/dashboard') }} " class="nav-link
                    @if(Request::segment(2) == 'dashboard') active @endif">
                            <i class="nav-icon fa fa-home"></i>
                            <!--Segment means the link director if (1) it will active by /admin link if (2) will detect dashboard-->
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">PAYROLL</li>

                    <li class="nav-item">
                        <a href=" {{ url('employee/payroll') }} " class="nav-link
                    @if(Request::segment(2) == 'payroll') active @endif">
                            <i class="nav-icon fa fa-money-bill"></i>
                            <p>
                                Payroll
                            </p>
                        </a>
                    </li>

                    <!--Attendance-->

                    <li class="nav-header">ATTENDANCE</li>

                    <li class="nav-item">
                        <a href=" {{ url('employee/attendance') }} " class="nav-link
                    @if(Request::segment(2) == 'attendance') active @endif">
                            <i class=" nav-icon fa-solid fa-user-clock"></i>
                            <p>
                                Attendance
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">LEAVE</li>

                    <li class="nav-item">
                        <a href=" {{ url('employee/leave') }} " class="nav-link
                           @if(Request::segment(2) == 'leave') active @endif">
                        <i class="nav-icon fa fa-calendar-alt"></i>
                        <p>
                            Leave
                        </p>
                        </a>
                    </li>

                    <li class="nav-header">FORUM</li>

                    <li class="nav-item">
                        <a href=" {{ url('employee/forum') }} " class="nav-link
                           @if(Request::segment(2) == 'forum') active @endif">
                            <i class="nav-icon fa fa-comment"></i>
                            <p>
                                Forum
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">SETTINGS</li>

                    <li class="nav-item">
                        <a href=" {{ url('employee/profile') }} " class="nav-link
                    @if(Request::segment(2) == 'profile') active @endif">
                            <i class="nav-icon fa-regular fa-id-card"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href=" {{ url('employee/change_password') }} " class="nav-link
                    @if(Request::segment(2) == 'change_password') active @endif">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>
                                Change Password
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href=" {{ url('employee/change_profile_picture') }} " class="nav-link
                    @if(Request::segment(2) == 'change_profile_picture') active @endif">
                            <i class="nav-icon fa-regular fa-id-badge"></i>
                            <p>
                                Change Profile Picture
                            </p>
                        </a>
                    </li>

                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
