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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/student','StudentController@index');
Route::get('/create','StudentController@create');
Route::post('/store','StudentController@Store');
Route::get('/edit/{id}','StudentController@edit');
Route::post('/update/{id}','StudentController@update');
Route::get('/destroy/{id}','StudentController@destroy');

