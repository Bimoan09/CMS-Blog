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
// Member
Route::group(['prefix' => 'artikel'], function() {
    Route::get('/member', 'Member\ArtikelController@index')->name('member.artikel.index');

});

//Internal Admin
Route::group(['prefix' => 'artikel'], function() {
    Route::get('/admin','PesertaDidikController@index')->name('siswa');



});
