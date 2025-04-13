<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;



// ItemControllerを使います
use App\Http\Controllers\ItemController;
// AuthControllerを使います
use App\Http\Controllers\AuthController;
// LikeControllerを使います
use App\Http\Controllers\LikeController;
// Auth/RegisteredUserControllerを使います
use App\Http\Controllers\Auth\RegisteredUserController;
// ProfileControllerを使います
use App\Http\Controllers\ProfileController;










/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
    // return view('welcome');
// });



//お客さん(ユーザー)が家の玄関(/)に入ると、
// 受付の人(Route::get())が【どこに案内すれば良い？】と考えて、
// リビング(ItemControllerのindex)に案内する


    // Route::get('/', [ItemController::class, 'index']);

    Route::get('/', function (Request $request) {
        if (Auth::check() && !$request->has('page')) {
            return redirect('/?page=mylist');
        }

        return app(ItemController::class)->index($request);
    });


    Route::middleware(['auth'])->group(function () {
        Route::post('/like/{product}', [LikeController::class, 'store'])->name('like.store');
        Route::delete('/like/{product}', [LikeController::class, 'destroy'])->name('like.destroy');
    });


    // ログインされていないと/loginにリダイレクト
    // 認証済みユーザーのみ/aにアクセスできる
    // その時ItemControllerのindexメソッドが実行される
    Route::middleware('auth')->group(function() {
        Route::get('/a', [ItemController::class, 'index']);
    });

    Route::get('/item/:{id}', [ItemController::class, 'show'])->name('show');




    // ログインユーザーしか /mypage にアクセスできなくなる。
    Route::get('/mypage', function () {
    return view('mypage');
    })->middleware(['auth'])->name('mypage');

// ログインユーザーしか /sell にアクセスできなくなる。
    Route::get('/sell', function () {
    return view('sell');
    })->middleware(['auth'])->name('sell');

    //  Route::get('/mypage/profile', function () {
    //  return view('edit');
    //  });

    // ログインユーザーしか  /mypage/profileにアクセスできなくなる。
    Route::get('/mypage/profile', function () {
    return view('edit');
    })->middleware(['auth'])->name('edit');



    Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware(['guest'])
    ->name('register');



    Route::post('/mypage/profile', [ProfileController::class, 'store'])
    ->middleware(['auth'])
    ->name('profile.store');






