<?php

use Illuminate\Support\Facades\Route;

// ItemControllerを使います
use App\Http\Controllers\ItemController;
// AuthControllerを使います
use App\Http\Controllers\AuthController;






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

Route::get('/', [ItemController::class, 'index']);

Route::get('/item/:{id}', [ItemController::class, 'show'])->name('show');


Route::get('/login', [AuthController::class, 'login']);



Route::get('/register', [AuthController::class, 'register']);

