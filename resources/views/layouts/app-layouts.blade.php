<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/layouts.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body class="app-body">
    <nav class="navbar-white navbar-expand fixed-top">
        <div class="navbar-container">
            <div class="navbar-container-left">
                @yield('logo')
            </div>
        </div>
    </nav>

    <div class="sidebar sidebar-left">
        <div class="sidebar-wrapper">
            <ul class="sidebar-elements">
                @yield('sidebar')
            </ul>
        </div>   
    </div>

    <div class="content">
        <div class="content content-right">
            <div class="content-inner">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>