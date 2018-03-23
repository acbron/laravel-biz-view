@extends('layouts.app-layouts')

@section('title', 'test title')

@section('logo')
    <img src="/img/{{ $logo }}" width="64" height="64" />
@endsection

@section('sidebar')
    <li class="sidebar-elements-divider">功能菜单</li>
    @foreach ($menuItems as $menuItem)
        <li>
            <a class="{{ $menuItem['active'] }} sidebar-elements-a" href="{{ $menuItem['url'] }}">
                <!-- <i class="sidebar-elements-icon glyphicon {{ $menuItem['icon'] }}"></i> -->
                <span class="oi {{ $menuItem['icon'] }} mr-1"></span>
                <span>{{ $menuItem['text'] }}</span>
            </a>
        </li>
    @endforeach
@endsection

@section('content')
    <!--div class="input-group input-central">
        <div class="input-group-btn" id="product">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">1688<span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">1688</a></li>
                <li><a href="#">天猫</a></li>
                <li><a href="#">淘宝</a></li>
            </ul>
        </div>
        <input type="text" class="form-control">
        <span class="input-group-btn" id="analysis">
            <button class="btn btn-default " type="button">解析</button>
        </span>
    </div-->
    <div class="card" style="width: 1000px; box-shadow: 3px 3px 10px grey;">
        <div style="margin: 20px;">
            <!-- <select class="form-control form-control-sm mr-2" id="exampleFormControlSelect1" style="width: 100px;">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select> -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="font-size: 14px;">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                        1688
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">天猫
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">淘宝
                    </a>
                </li>
            </ul>
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-inline float-right">
                <button type="button" class="btn btn-primary btn-sm mr-1" style="width: 80px;">解析</button>
                <button type="button" class="btn btn-danger btn-sm" style="width: 80px;">清除</button>
            </div>
        </div>
    </div>
    <!-- <div class="content-widget">
        <div class="index-form">
        </div>
    </div> -->
@endsection