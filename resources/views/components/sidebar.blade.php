<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">JURSE Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">JD</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">JURSE Dashboard</li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>JURSE Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>

                </ul>
            </li>


            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">All Users</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Tasks</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('task.index') }}">All Tasks</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('product.index') }}">All Product</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Keynote Speakers</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('keynotespeaker.index') }}">All Keynote Speakers</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Tweets</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('tweet.index') }}">All Tweets</a>
                    </li>

                </ul>
            </li>
    </aside>
</div>
