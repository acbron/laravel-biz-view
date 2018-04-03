<?php

namespace App\Http\Controllers;

use App\Utils\QueryUtils;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

    public function copyUrl(Request $request) {
        $result2 = QueryUtils::getElements($url, 0);
        return response()->json(array(
            'status' => 200,
            'data' => $result2
        ));
    }

}

?>