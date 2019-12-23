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

// Route::prefix('member')->group(function() {
//     Route::get('/', 'MemberController@index');
// });
Route::group(['prefix' => 'member', 'middleware' => ['auth','MemberType']], function() {
    Route::get('/dashboard', 'MemberController@index')->name('member.home');
    Route::get('/{name}', 'MemberController@profile')->name('member.profile');
});
