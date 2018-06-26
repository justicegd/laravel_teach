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

Route::get('/', function () {
    return view('welcome');
});

/**
 * 建立第一個路由
 */
Route::get('/tea_1', function () {
    return 'test';
});

/**
 * 使用中介層
 */
Route::get('/tea_2', function () {
    return 'test';
})->middleware('tea.2');

/**
 * 路由命名
 */
Route::get('/tea_3', function () {
    return '注意url變成tea_3';
})->name('tea_3');


/**
 * 使用路由名稱
 */
Route::get('/tea_4', function () {
    return redirect()->route('tea_3');
});


/**
 * 加入前缀
 */
Route::group(['prefix' => 'test','middleware'=>'tea.2'], function () {
    Route::get('/tea_5', function () {
        return 'test';
    });
});

/**
 * 進入controller
 */
Route::get('/tea_6', 'tea_1\Tea1@goView');

