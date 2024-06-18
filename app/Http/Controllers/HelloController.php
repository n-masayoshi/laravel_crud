<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HelloController extends BaseController
{
    public function index()
    {
        $data = [
            'msg' => 'Bladeテンプレートのサンプル',
        ];
        return view('index', $data);
    }
}
