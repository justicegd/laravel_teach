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

/** 進入購買頁 */
Route::get('/order','Home@orderPage')->name("order-page");

/** 新增訂單 */
Route::post('/order','Home@order')->name("create-order");
