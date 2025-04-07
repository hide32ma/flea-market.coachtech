<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

// Productモデルを使用
use App\Models\Product;

// Userモデルを使用
use App\Models\User;


class ItemController extends Controller
{
    // indexという画面(view)を表示します
    // public function index()
    // {
        // Productモデルを使用してProductsテーブルの全てのデーてを取得
        // $products = Product::all();

        // $productsをviewに渡す
        // return view('index', compact('products'));
    // }

    
    public function index(Request $request)
    {
        $page = $request->query('page');

        if ($page === 'mylist' && Auth::check()) {
            $products = Auth::user()->likedProducts()->with('category')->get();
        } else {
            $products = Product::with('category')->get();
        }
        return view('index', compact('products'));
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('show', compact('product'));
    }


}
