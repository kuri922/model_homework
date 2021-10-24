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



Route::get('/hello','ItemController@index');

Route::post('sample/store','ItemController@store')->name('model');
Route::get('sample/edit/{id}','ItemController@edit')->name('item.edit');
Route::put('sample/edit/update/{id}','ItemController@update')->name('item.update');
Route::get('sample/model','ItemController@show');
Route::get('sample/index','ItemController@index');
Route::delete('sample/delete/{id}', 'ItemController@destroy')->name('item.destroy');


