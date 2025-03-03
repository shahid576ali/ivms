<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
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
                    <h1>Article</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Article</a>
                        </li>
                    </ul>
                </div>

            </div>



            <main class="table" id="customers_table">
                <section class="table__header">
                    <h1>Article</h1>
                    <form action="#">
                        <div class="input-group">
                            <input type="search" placeholder="Search...">
                            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                        </div>
                    </form>
                    <div class="export__file">
                        <a href="#" class="btn-download">
                            <span class="text">Add Meeting</span>
                        </a>
                    </div>
                </section>
                <section class="table__body">
                    <table>
                        <thead>
                            <tr>
                                <th> Id </th>
                                <th> DOA </th>
                                <th> Report </th>
                                <th> Learning </th>
                                <th> Admin Remark </th>
                                <th> Leader Remark </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td>13-02-2025</td>
                                <td>9:30 PM </td>
                                <td>Simran Sharma</td>
                                <td>
                                    <p class="status delivered">Approved</p>
                                </td>
                                <td> <i class="bx bxs-edit"></i></td>
                                <td> <i class="bx bxs-edit"></i></td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td>12-02-2025</td>
                                <td>9:30 PM </td>
                                <td>Simran Sharma</td>
                                <td>
                                    <p class="status delivered">Approved</p>
                                </td>
                                <td> <i class="bx bxs-edit"></i></td>
                                <td> <i class="bx bxs-edit"></i></td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td>12-02-2025</td>
                                <td>9:30 PM </td>
                                <td>Simran Sharma</td>
                                <td>
                                    <p class="status delivered">Approved</p>
                                </td>
                                <td> <i class="bx bxs-edit"></i></td>
                                <td> <i class="bx bxs-edit"></i></td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td>12-02-2025</td>
                                <td>9:30 PM </td>
                                <td>Simran Sharma</td>
                                <td>
                                    <p class="status delivered">Approved</p>
                                </td>
                                <td> <i class="bx bxs-edit"></i></td>
                                <td> <i class="bx bxs-edit"></i></td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td>12-02-2025</td>
                                <td>9:30 PM </td>
                                <td>Simran Sharma</td>
                                <td>
                                    <p class="status delivered">Approved</p>
                                </td>
                                <td> <i class="bx bxs-edit"></i></td>
                                <td> <i class="bx bxs-edit"></i></td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td>12-02-2025</td>
                                <td>9:30 PM </td>
                                <td>Simran Sharma</td>
                                <td>
                                    <p class="status delivered">sApproved</p>
                                </td>
                                <td> <i class="bx bxs-edit"></i></td>
                                <td> <i class="bx bxs-edit"></i></td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td>12-02-2025</td>
                                <td>9:30 PM </td>
                                <td>Simran Sharma</td>
                                <td>
                                    <p class="status delivered">Approved</p>
                                </td>
                                <td> <i class="bx bxs-edit"></i></td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td>12-02-2025</td>
                                <td>9:30 PM </td>
                                <td>Simran Sharma</td>
                                <td>
                                    <p class="status delivered">Approved</p>
                                </td>
                                <td> <i class="bx bxs-edit"></i></td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td>12-02-2025</td>
                                <td>9:30 PM </td>
                                <td>Simran Sharma</td>
                                <td>
                                    <p class="status delivered">Approved</p>
                                </td>
                                <td> <i class="bx bxs-edit"></i></td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td>12-02-2025</td>
                                <td>9:30 PM </td>
                                <td>Simran Sharma</td>
                                <td>
                                    <p class="status delivered">Approved</p>
                                </td>
                                <td> <i class="bx bxs-edit"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </main>
        </main>
    </section>
    <script src="{{asset('js/table.js')}}"></script>
    <script src="{{asset('js/Sidebar.js')}}"></script>
</body>

</html>