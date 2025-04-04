<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class LikeController extends Controller
{
    public function store($productId)
    {
        $user = Auth::user();
        $user->likedProducts()->attach($productId);

        return back()->with('success', 'いいねしました');
    }

    public function destroy($productId)
    {
        $user = Auth::user();
        $user->likedProducts()->detach($productId);

        return back()->with('success', 'いいねを解除しました');
    }
}

