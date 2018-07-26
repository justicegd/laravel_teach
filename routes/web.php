<?php

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

Route::get('/','Home@home');

Route::group(['middleware'=>['login.check']],function(){
    /** 進入購買頁 */
    Route::get('/order','Home@orderPage')->name("order-page");
});

/** 新增訂單 */
Route::post('/order','Home@order')->name("create-order");

/** 測試 */
Route::get('/test','Home@test')->name("test");

/** login页面 */
Route::get('/login',function (){
    return view('login');
})->name("loginPage");

/** login */
Route::post('/login','Login@login')->name("login");

/** logout */
Route::get('/logout',function (){
    session()->forget('loginStatus');
    return redirect()->route('login');
})->name("logout");


