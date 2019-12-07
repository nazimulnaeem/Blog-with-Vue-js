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
    return view('frontend.master');
});

Auth::routes();


Route::group(['namespace' => 'Admin','middleware'=>['auth']],function(){
    // Route::get('/admin-dashboard', 'PagesController@index')->name('dashboard');
    Route::get('/admin-dashboard', 'PagesController@test')->name('test');

    ////====== start post route =======///////
    // Route::get('/admin-post', 'PostController@all_post')->name('admin.post');
    Route::get('/post', 'PostController@all_post');
    Route::post('/add-post', 'PostController@post_insert');
    Route::get('/post-edit/{id}', 'PostController@post_edit');
    Route::post('/post-update/{id}', 'PostController@post_update');
    Route::get('/post_delete/{id}', 'PostController@post_delete');

    //// ====== end post route ======= //////

    ////====== start category route =======///////
    Route::post('/add-category', 'CategoryController@add_category');
    Route::get('/category', 'CategoryController@all_category');
    Route::get('/category/{id}', 'CategoryController@delete_category');
    Route::get('/edit-category/{id}', 'CategoryController@edit_category');
    Route::post('/update-category/{id}', 'CategoryController@update_category');
    //////======== end category route ====== /////////

});

// Route::get('/{anypath}', 'Admin\PagesController@test')->where('path','.*');

Route::get('/home', 'HomeController@index')->name('home');
