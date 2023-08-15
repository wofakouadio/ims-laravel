<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <div>
              <span class="smini-visible fw-bold tracking-wide fs-lg">
                c<span class="text-primary">b</span>
              </span>
                <a class="link-fx fw-bold tracking-wide mx-auto" href="#">
                <span class="smini-hidden">
                    <i class="fa fa-cart-shopping text-primary"></i>
                    <span class="fs-4 text-primary">IMS</span>
                </span>
                </a>
            </div>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-fw fa-times"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link {{url()->current() === '/super-admin/dashboard' ? 'active' : ''}}" href="">
                            <i class="nav-main-link-icon fa fa-home"></i>
                            <span class="nav-main-link-name">Home</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Projects</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-wrench"></i>
                            <span class="nav-main-link-name">Manage</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-user"></i>
                            <span class="nav-main-link-name">Clients</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Team</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-wallet"></i>
                            <span class="nav-main-link-name">Payments</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Settings</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-fire"></i>
                            <span class="nav-main-link-name">Security</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                            <span class="nav-main-link-name">Profile</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-flag"></i>
                            <span class="nav-main-link-name">Notifications</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-lock"></i>
                            <span class="nav-main-link-name">Password Update</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Users</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{url()->current() === route('new-user') ? 'active' : ''}}" href="/super-admin/new-user">
                            <i class="nav-main-link-icon fa fa-user-plus"></i>
                            <span class="nav-main-link-name">New User</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{url()->current() === route('all-users') ? 'active' : ''}}" href="/super-admin/all-users">
                            <i class="nav-main-link-icon fa fa-users-line"></i>
                            <span class="nav-main-link-name">Users</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-gears"></i>
                            <span class="nav-main-link-name">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
</nav>
