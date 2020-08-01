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
Route::any('test/header1','TestController@header1');

Route::any('user/reg','User\IndexController@reg');
Route::any('user/regdo','User\IndexController@regdo');
Route::any('user/login','User\IndexController@login');
Route::any('user/logindo','User\IndexController@logindo');
Route::any('index/index','Index\IndexController@index');
Route::any('/oauth/github','OauthController@git');