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
Route::get('/', function () {
    return view('index');
});
Route::get('/login', 'UserController@index');

Route::get('/register', 'RegisterController@index')-> name('register');
Route::post('/register', 'RegisterController@register');

Route::get('/sin', 'RegisterController@index')-> name('re');
Route::post('/sin', 'RegisterController@register');
