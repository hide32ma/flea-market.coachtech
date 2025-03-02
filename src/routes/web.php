<?php

use Illuminate\Support\Facades\Route;

// ItemControllerを使います
use App\Http\Controllers\ItemController;






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
// 受付の人(Route::get())が【どこに案内すれば良いかな？】と考えて、
// リビング(ItemControllerのindex)に案内する
Route::get('/', [ItemController::class, 'index']);
