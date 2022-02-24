<?php

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
//Route::get('/users/','App\Http\controllers\Admin\UsersController@index);
Route::group(['prefix'=>'users'],function() {
    Route::get('', [\App\Http\controllers\Admin\UserController::class, 'index']);
//    Route::get('', [\App\Http\controllers\Admin\UserController::class, 'show']);
    Route::get('a1',function (){return "a1";})->name('link1');
    Route::get('a2',function (){return "a2";})->name('link2');
    Route::get('a3',function (){return "a3";})->name('link3');
});

Route::group(['prefix'=>'news','as'=>'news.'],function(){
Route::get('/',[\App\Http\Controllers\NewsController::class,'index']);
    Route::post('/store',[\App\Http\Controllers\NewsController::class,'store'])->name('store');
});

Route::group(['prefix'=>'blogs','as'=>'blogs.'],function() {
    Route::get('',[\App\Http\Controllers\BlogsController::class,'index'])->name('index');
    Route::post('store',[\App\Http\Controllers\BlogsController::class,'store'])->name('store');
    Route::get('delete/{id}',[\App\Http\Controllers\BlogsController::class,'delete'])->name('delete');

    Route::get('edit/{id}',[\App\Http\Controllers\BlogsController::class,'edit'])->name('edit');
    Route::post('update/{id}',[\App\Http\Controllers\BlogsController::class,'update'])->name('update');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
