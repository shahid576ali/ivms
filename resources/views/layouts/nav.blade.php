<link rel="stylesheet" href="{{asset('css/navbar.css')}}">
<nav>
    <i class='bx bx-menu' ></i>
    <a href="#" class="nav-link"></a>
    <form action="#">
        <div class="form-input" style="display: none;">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
        </div>
    </form>
    <input type="checkbox" id="switch-mode" hidden>
    <label for="switch-mode" class="switch-mode"></label>
    <a href="#" class="notification">
        <i class='bx bxs-bell' ></i>
        <span class="num">8</span>
    </a>
    <a href="#" class="profile">
        <img src="{{asset('profile/profile.png')}}">
    </a>
</nav>