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
    return view('home');
});

Route::post('/logout', function () {
    auth()->logout();
    return view('home');
});

Route::get('login', 'LoginController@create');
Route::get('login/callback', 'LoginController@callback');
Route::get('home', 'LoginController@show');
