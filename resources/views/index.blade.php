@extends('layouts.app-layouts')

@section('title', 'test title')

@section('logo')
    <img src="/img/{{ $logo }}" width="48" height="48" />
@endsection

@section('sidebar')
    <li class="sidebar-elements-divider">功能菜单</li>
    @foreach ($menuItems as $menuItem)
        <li>
            <a class="{{ $menuItem['active'] }} sidebar-elements-a" href="{{ $menuItem['url'] }}">
                <i class="sidebar-elements-icon glyphicon {{ $menuItem['icon'] }}"></i>
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
    <div class="content-widget">
        <div class="index-form">
        </div>
    </div>
@endsection