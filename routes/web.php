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



Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'user',  'middleware' => 'is_user'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/store/post', 'PostController@store')->name('store.post');
    Route::get('/post/{id}', 'PostController@post')->name('post');
    Route::post('/store/comemnt', 'PostController@comment')->name('store.comment');
});
Route::group(['prefix' => 'admin',  'middleware' => 'is_admin'], function(){
    Route::get('/home', 'AdminController@index')->name('home'); //Dashboard super admin
});