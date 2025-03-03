<link rel="stylesheet" href="{{asset('css/Sidebar.css')}}">
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">IVMS</span>
    </a>
    <ul class="side-menu top">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="{{route('dashboard')}}" >
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="{{ Request::is('profiles') ? 'active' : '' }}">
            <a href="{{route('profiles')}}" >
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Profile</span>
            </a>
        </li>
        <li class="{{ Request::is('article') ? 'active' : '' }}">
            <a href="{{route('article')}}" >
                <i class='bx bxs-doughnut-chart' ></i>
                <span class="text">Article Upload</span>
            </a>
        </li>
        <li class="{{ Request::is('alluser') ? 'active' : '' }}">
            <a href="{{route('alluser')}}" >
                <i class='bx bxs-message-dots' ></i>
                <span class="text">All User</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-group' ></i>
                <span class="text">Team</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog' ></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>