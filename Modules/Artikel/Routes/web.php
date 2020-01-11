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
// Member Artikel
Route::group(['prefix' => 'member'], function() {
    Route::get('/artikel/list', 'Member\ArtikelController@index')->name('member.artikel.index');
    Route::get('/artikel/create', 'Member\ArtikelController@create')->name('member.artikel.create');
    Route::get('/artikel/detail/1', 'Member\ArtikelController@show')->name('member.artikel.show');
    Route::get('/artikel/edit/1', 'Member\ArtikelController@edit')->name('member.artikel.edit');

});


//Internal Admin Artikel
Route::group(['prefix' => 'admin'], function() {
    Route::get('/artikel/list', 'InternalAdmin\ArtikelController@index')->name('admin.artikel.index');
    Route::get('/artikel/create', 'InternalAdmin\ArtikelController@create')->name('admin.artikel.create');


});
