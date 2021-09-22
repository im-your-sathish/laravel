@section('header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    @show

    @section('navbar')

    @if(session('status'))
    <div class="alert alert-<?php if (session('color')) {
                                echo session('color');
                            } else {
                                echo "success";
                            } ?> alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{session('status')}}
    </div>
    @endif

    <header>
        <!-- Navbar -->
        <nav style="border-bottom:1px solid blue;" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        @if(session('user')->role==1)
                        <li class="nav-item">
                            <a class="nav-link" href="/users">Users</a>
                        </li>
                        @endif


                        <li class="nav-item">
                            <a class="nav-link" href="/books">
                                Books
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="./logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            Welcome {{$name}}
        </nav>

        <div class="p-1 text-center bg-light" style="margin-top: 58px;">

        </div>
    </header>
    @show

    <div class="container">
        @yield('content')
    </div>


</body>

</html>