<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/a.css')}}">
</head>

<body>

    {{-- sidebar --}}
    @include('layouts.sidebar')


    {{-- content --}}
    <section id="content">

        {{-- navbar --}}
        @include('layouts.nav')

        {{-- main content --}}
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Profile</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Profile</a>
                        </li>
                    </ul>
                </div>
               
            </div>




            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Shahid Ali</h3>
                       <span> NIN-104012 </span>
                    </div>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Name</strong>
                                </td>
                                <td>Shahid Ali</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Email</strong>
                                </td>
                                <td>Shahid@gmail.com</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Contact</strong>
                                </td>
                                <td>8126808243</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>City</strong>
                                </td>
                                <td>Agra</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>State</strong>
                                </td>
                                <td>Uttar Pardesh</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Country</strong>
                                </td>
                                <td>India</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>LAnguage</strong>
                                </td>
                                <td>English</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Todos</h3>
                        <i class='bx bx-plus'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                   <div class="todo-list">
                    <img src="{{asset('images/Alex Gonley.jpg')}}" alt="">
                   </div>
                </div>
            </div>
        </main>
    </section>
    <script src="{{asset('js/table.js')}}"></script>
    <script src="{{asset('js/Sidebar.js')}}"></script>
</body>

</html>