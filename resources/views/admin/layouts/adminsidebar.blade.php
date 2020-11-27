<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin')}}" class="brand-link">
        <img src="{{ asset('/public/images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"> {{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Cards & Widgets
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/sliders') }}" class="nav-link">
                                <i class="far nav-icon" aria-hidden="true"></i>
                                <p>Sliders</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-header">Controls</li>
                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                        <p>
                            Admin
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/viewadmin') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>View All Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/addadmin') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>Create New</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Galery First
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/viewprojects') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>View All</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/addproject') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-male"></i>
                        <p>
                            Galery Second
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/viewteams') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>View</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/addteam') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>Add</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>
                           Galery 3
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/viewpartners') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>View</p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/addpartners')}}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>Add</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Messages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/viewmessages') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>View Messages</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
