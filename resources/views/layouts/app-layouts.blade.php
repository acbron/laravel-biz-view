<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" 
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
        crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" 
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
        crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
        crossorigin="anonymous"></script>
    <link href="{{ URL::asset('css/open-iconic/font/css/open-iconic-bootstrap.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/layouts.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
</head>
<body class="app-body">
    <nav class="navbar navbar-light" style="background-color: #f6f6f6; height: 70px; ">
        <div class="m-auto" style="width: 1190px;">
                @yield('logo')
            <div class="float-right" style="height: 24px; margin-top: 12px;">
                <a style="border-left: 1px solid #e3e3e3; font-size: 13px; padding: 0 4px;">客服中心</a>
                <a style="border-left: 1px solid #e3e3e3; font-size: 13px; padding: 0 4px;">使用手册</a>
                <a style="border-left: 1px solid #e3e3e3; font-size: 13px; padding: 0 4px;">续费通道</a>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-dark" 
        style="height: 30px; padding: 0; background-image: linear-gradient(to right,#ff5000 0,#ff9000 100%);">
        <div class="m-auto" style="width: 1190px; display: flex;">
            @yield('menu')
        </div>
    </nav>

    <!-- <div class="sidebar sidebar-left">
        <div class="sidebar-wrapper">
            <ul class="sidebar-elements">
                @yield('sidebar')
            </ul>
        </div>   
    </div> -->
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ URL::asset('js/index.js') }}"></script>
</body>
</html>