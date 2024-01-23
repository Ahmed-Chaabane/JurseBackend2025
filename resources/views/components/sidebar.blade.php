<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{url('home')}}">JURSE Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('home')}}">JD</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">JURSE Dashboard</li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>JURSE Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>

        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>Users</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('user.index') }}">All Users</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>Tasks</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('task.index') }}">All Tasks</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>Product</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('product.index') }}">All Product</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>Keynote Speakers</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('keynotespeaker.index') }}">All Keynote Speakers</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>Tweets</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('tweet.index') }}">All Tweets</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>Authors</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('author.index') }}">All Authors</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>organizers</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('organizers.index') }}">All organizers</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>Special Sessions</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('specialsession.index') }}">All Special Sessions</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>Sponsors</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('sponsor.index') }}">All Sponsors</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>Photos</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('photo.index') }}">All Photos</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-circle"></i><span>Videos</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('video.index') }}">All Videos</a>
                </li>
            </ul>
        </li>
    </aside>
</div>
