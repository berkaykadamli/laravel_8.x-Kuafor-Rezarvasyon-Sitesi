<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{route('admin_home')}}">
            <img src="{{asset('assets')}}/admin/images/icon/logo.png" alt="Cool Admin"/>

        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                <li>
                    <a href="{{route('admin_home')}}">
                        <i class="fas fa-chart-bar"></i>Home</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Tables</a>
                </li>
                <li>
                    <a href="{{route('admin_category')}}">
                        <i class="far fa-check-square"></i>Category</a>
                </li>
                <li>
                    <a href="{{route('admin_service')}}">
                        <i class="fas fa-calendar-alt"></i>Services</a>
                </li>
                <li>
                    <a href="{{route('admin_setting')}}">
                        <i class="fas fa-server"></i>Settings</a>
                </li>
                <li>
                    <a href="{{route('admin_message')}}">
                        <i class="fas fa-calendar-plus"></i>All Messages</a>
                </li>
                <li>
                    <a href="{{route('admin_review')}}">
                        <i class="fas fa-address-card"></i>Review</a>
                </li>
                <li>
                    <a href="{{route('admin_reservation')}}">
                        <i class="fas fa-angular"></i>Reservation</a>
                </li>
                <li>
                    <a href="{{route('admin_user')}}">
                        <i class="fas fa-search"></i>Users</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.blade.php">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
