@extends('layouts.app-layouts')

@section('title', 'test title')

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
    <h2>hehe</h2>
@endsection