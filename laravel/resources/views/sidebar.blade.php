
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active">
            <li>
                <a href="{{ url('/') }}">
                    <i class="fa fa-dashboard"></i> <span>Home</span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('/categories') }}">
                    <i class="fa fa-wrench"></i> <span>Categories</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/products') }}">
                    <i class="fa fa-shopping-cart"></i> <span>Products</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/currencies') }}">
                    <i class="fa fa-dollar"></i> <span>Currencies</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/discounts') }}">
                    <i class="fa fa-credit-card"></i> <span>Discounts</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/status') }}">
                    <i class="fa fa-bullhorn"></i> <span>Status</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/quotes') }}">
                    <i class="fa fa-exchange"></i> <span>Qoutes</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/clients') }}">
                    <i class="fa fa-tags"></i> <span>Clients</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-user"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/groups') }}">Groups</a></li>
                    <li><a href="{{ url('/users') }}">Users</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
