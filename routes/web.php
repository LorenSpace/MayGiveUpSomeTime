<?php

use App\Http\Controllers\MsgsController;
use Illuminate\Support\Facades\Route;

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

Route::any('/', function () {
    return view('msg/login');
});

Route::prefix('msg')->group(function(){

    //索引
    Route::get('index',[MsgsController::class, 'index']);

    Route::get('add',[MsgsController::class, 'add']);

    //接受POST数据并存入库
    Route::post('add',[MsgsController::class, 'addpost']);

    //根据删除数据
    Route::get('del/{id}',[MsgsController::class, 'del'])
    ->where('id','\d+');

    //更改留言
    Route::match(['get','post'],'edit/{id}',[MsgsController::class, 'edit'])
    ->where('id','\d+');

});

Route::prefix('admin')->group(function(){

    Route::get('index',[MsgsController::class, 'index1']);

});

Route::get('relog',function(){
    return view('msg/login');
});

