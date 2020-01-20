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

Route::prefix('account')->group(function() {
    Route::get('/login', 'AccountController@getLogin')->name('get.login');
    Route::get('/register', 'AccountController@getRegister')->name('get.register');
    Route::post('/login', 'AccountController@postLogin')->name('post.login');
    Route::post('/register', 'AccountController@postRegister')->name('post.register');
    Route::get('/logout', 'AccountController@logout')->name('post.logout');
});



