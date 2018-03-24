<?php

namespace App\Http\Controllers;

class AppController extends Controller {
    
    public function index() {
        $menuItems = array(
            [
                'id' => 'yijianfuzhi',
                'icon' => 'glyphicon-file',
                'url' => 'a',
                'text' => '一键复制',
                'active' => 'active'
            ],
            [
                'id' => 'zidongpingjia',
                'icon' => 'glyphicon-comment',
                'url' => 'b',
                'text' => '自动评价',
                'active' => 'inactive'
            ],
            [
                'id' => 'zhinengchongfa',
                'icon' => 'glyphicon-send',
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

    public function copy($url) {
        
    }

}

?>