<?php

namespace App\Http\Controllers;

class AppController extends Controller {
    
    public function index() {
        $menuItems = array(
            [
                'icon' => 'oi-clipboard',
                'url' => 'a',
                'text' => '一键复制',
                'active' => 'active'
            ],
            [
                'icon' => 'oi-comment-square',
                'url' => 'b',
                'text' => '自动评价',
                'active' => 'inactive'
            ],
            [
                'icon' => 'oi-cart',
                'url' => 'c',
                'text' => '智能重发',
                'active' => 'inactive'
            ]
        );
        return view('index', [
            'title' => '旺财助手',
            'logo' => 'logo.jpg',
            'menuItems' => $menuItems
        ]);
    }

}

?>