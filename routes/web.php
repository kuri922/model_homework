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

// モデルから表示
Route::get('sample/model', 'ItemController@model');

// 登録後DB保存、完了画面を表示
Route::get('/hello','ItemController@index');
Route::get('sample/result','ItemController@store');
Route::post('sample/result','ItemController@store')->name('result');
