<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Index()
    {
        $item = [
            'content' => 'パラメータを渡す',
        ];
        return view('Index', $item);
    }
}
