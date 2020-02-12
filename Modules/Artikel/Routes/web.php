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
Route::group(['prefix' => 'member', 'middleware' => ['auth']], function() {
    Route::get('/artikel/list', 'Member\ArtikelController@index')->name('member.artikel.index');
    Route::get('/artikel/create', 'Member\ArtikelController@create')->name('member.artikel.create');
    Route::get('/artikel/detail/1', 'Member\ArtikelController@show')->name('member.artikel.show');
    Route::get('/artikel/edit/1', 'Member\ArtikelController@edit')->name('member.artikel.edit');
    Route::post('/artikel/post', 'Member\ArtikelController@store')->name('member.artikel.store');
    
    Route::get('/artikel/image', 'Member\ArtikelController@getImage');
    Route::get('/data/cache', 'Member\ArtikelController@getCache');

});


//Internal Admin Artikel
Route::group(['prefix' => 'admin' , 'middleware' => ['auth', 'AdminType']], function() {

    // artikel
    Route::get('/artikel/list', 'InternalAdmin\ArtikelController@index')->name('admin.artikel.index');
    Route::get('/artikel/member/list', 'InternalAdmin\ArtikelController@indexArticleMember')->name('admin.artikel.indexMember');
    Route::get('/artikel/create', 'InternalAdmin\ArtikelController@create')->name('admin.artikel.create');
    Route::get('/artikel/{tittle}', 'InternalAdmin\ArtikelController@show')->name('admin.artikel.detail');
    Route::post('/artikel/post', 'InternalAdmin\ArtikelController@store')->name('admin.artikel.store');
    //kategori
    Route::get('/kategori/create', 'InternalAdmin\CategoryController@create')->name('admin.category.create');
    Route::get('/kategori/list', 'InternalAdmin\CategoryController@index')->name('admin.category.index');
    Route::get('/kategori/{id}', 'InternalAdmin\CategoryController@show')->name('admin.category.detail');

    Route::delete('/kategori/delete/{id}', 'InternalAdmin\CategoryController@destroy')->name('admin.category.deleteCategory');
    Route::post('/kategori/post', 'InternalAdmin\CategoryController@store')->name('admin.category.store');

    //banner
    Route::get('/banner/create', 'InternalAdmin\BannerController@create')->name('admin.banner.create');
    Route::post('/banner/store', 'InternalAdmin\BannerController@store')->name('admin.banner.store');
    Route::get('/banner/list', 'InternalAdmin\BannerController@index')->name('admin.banner.index');

    //tags 
    Route::get('/tags/list', 'InternalAdmin\TagsController@index')->name('admin.tags.index');
    Route::delete('/tags/delete/{id}', 'InternalAdmin\TagsController@destroy')->name('admin.tags.delete');
  

});
