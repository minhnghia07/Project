<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link" href="">
        <img alt="AdminLTE Logo" class="brand-image img-circle elevation-3" src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }} " style="opacity: .8">
            <span class="brand-text font-weight-light">
               Xin chào  {{ $user->name }}
            </span>
        </img>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img alt="User Image" class="img-circle elevation-2" src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }} ">
                </img>
            </div>
            <div class="info">
                <a class="d-block" href="{{ route('admin.logout') }}">
                  {{ $user->name }}
                </a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Menu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Quản lí Danh mục 
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Quản lí Sản phẩm
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('order.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Quản lí Đơn hàng
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('settings.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Setting
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Danh sách users
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('roles.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Danh sách vai trò
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Quản Lí Blog
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('feedback.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Quản Lí Contact
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.logout') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Đăng Xuất
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('permissions.create') }}">
                        <p>
                           Tạo dữ liệu bảng Permission
                           
                        </p>
                    </a>
                </li>
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>