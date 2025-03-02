<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    // indexという画面(view)を表示します
    public function index()
    {
        return view('index');
    }
}
