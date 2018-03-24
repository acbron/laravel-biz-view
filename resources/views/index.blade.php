@extends('layouts.app-layouts')

@section('title', 'test title')

@section('logo')
    <img src="/img/{{ $logo }}" width="48" height="48" />
@endsection

<!-- @section('sidebar')
    <li class="sidebar-elements-divider">功能菜单</li>
    @foreach ($menuItems as $menuItem)
        <li class="{{ $menuItem['active'] }} sidebar-elements-li" id="{{ $menuItem['id'] }}">
            <a class="{{ $menuItem['active'] }} sidebar-elements-a" href="{{ $menuItem['url'] }}" 
                <i class="sidebar-elements-icon glyphicon {{ $menuItem['icon'] }}"></i>
                <span>{{ $menuItem['text'] }}</span>
            </a>
        </li>
    @endforeach
@endsection  -->

@section('menu')
    @foreach ($menuItems as $menuItem)
        <div class="{{ $menuItem['active'] }} menu-item" id="{{ $menuItem['id'] }}">
            <span class="menu-span">{{ $menuItem['text'] }}</span>
        </div>
    @endforeach
@endsection

@section('content')
    <!-- <div class="input-group" style="border: 1px solid #ff7300; width: 1190px; margin: 10px auto 0 auto;">
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" 
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="width: 100px; border: 1px solid #eee; background: white; border-radius: 0;">
                1688
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                style="border-radius: 0; width: 100px;">
                <a class="dropdown-item" href="#">1688</a>
                <a class="dropdown-item" href="#">天猫</a>
                <a class="dropdown-item" href="#">淘宝</a>
            </div>
        </div>

        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1"
            style="border-left:none; border-top:1px solid #eee;border-right:none;border-bottom:1px solid #eee;border-radius:0;">
        <div class="input-group-prepend">
            <button class="btn btn-primary" type="button" style="background:#ff7300; border:none; width:100px;">解析</button>
        </div>

        <button class="btn" type="button" style="background:white; border:none; width:100px;">解析</button>
    </div> -->
    <div style="width: 1190px; margin: 10px auto 0 auto;">
        <textarea id="fuzhi-textarea" class="fuzhi-textarea" rows="8"></textarea>
        <div style="width: 1190px; height: 30px;">
            <div class="float-right">
                <span id="fuzhi-ali" class="fuzhi-span active">阿里巴巴</span>
                <span id="fuzhi-tm" class="fuzhi-span">天猫</span>
                <span id="fuzhi-tb" class="fuzhi-span">淘宝</span>
                <button id="fuzhi-btn" type="button" class="fuzhi-button">复制</button>
            </div>
        </div>
    </div>

@endsection