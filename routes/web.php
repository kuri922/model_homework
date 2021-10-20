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


// 登録後DB保存、完了画面を表示
Route::get('/hello','ItemController@index');
Route::get('sample/model','ItemController@store');
Route::post('sample/model','ItemController@store')->name('model');
Route::get('sample/edit/{id}','ItemController@edit');

