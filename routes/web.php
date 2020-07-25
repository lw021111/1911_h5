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

Route::any('/test','TestController@test');

Route::any('test/aes1','TestController@aes1');
Route::any('test/aesdec','TestController@aesdec');
Route::any('test/sign1','TestController@sign1');
