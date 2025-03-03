<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- iconlink --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- my css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    {{-- sidebar start --}}
    <section id="sidebar">
        <a href="#" class="brand">
            <i class="bx bxs-smile"></i>
            <span class="text">Dashboard</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dasboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dasboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dasboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dasboard</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dasboard</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dasboard</span>
                </a>
            </li>
            <li>
                <a href="" class="logout">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dasboard</span>
                </a>
            </li>
        </ul>
    </section>
    {{-- sidebar end --}}

    {{-- content start--}}
    <section id="content">
        {{-- nav start --}}
        <nav>
            <i class="bx bx-menu"></i>
            <a href="#" class="nav-link">
                Categories 
            </a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search">
                    <button type="submit" class="search-btn"><i class="bx bx-search"></i></button>
                </div>
            </form>
            <a href="#" class="notification">
                <i class="bx bxs-bell"></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="{{asset('profile.png')}}" alt="" srcset="">
            </a>
        </nav>
        {{-- nav end --}}
        
    </section>

    
    {{-- content end --}}

    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>