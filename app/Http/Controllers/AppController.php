<?php

namespace App\Http\Controllers;

class AppController extends Controller {
    
    public function index() {
        $menuItems = array(
            [
                'icon' => 'glyphicon-file',
                'url' => 'a',
                'text' => '一键复制',
                'active' => 'active'
            ],
            [
                'icon' => 'glyphicon-comment',
                'url' => 'b',
                'text' => '自动评价',
                'active' => 'inactive'
            ],
            [
                'icon' => 'glyphicon-send',
                'url' => 'c',
                'text' => '智能重发',
                'active' => 'inactive'
            ]
        );
        return view('index', [
            'menuItems' => $menuItems
        ]);
    }

}

?>