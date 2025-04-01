<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Productモデルを使用
use App\Models\Product;

// Userモデルを使用
use App\Models\User;


class ItemController extends Controller
{
    // indexという画面(view)を表示します
    public function index()
    {
        // Productモデルを使用してProductsテーブルの全てのデーてを取得
        $products = Product::all();

        // $productsをviewに渡す
        return view('index', compact('products'));
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('show', compact('product'));
    }


}
