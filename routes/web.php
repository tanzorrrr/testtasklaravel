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

Route::group(['prefix'=>'admin','namespace'=>'Admin',
    'middleware'=>['auth']],function(){
    Route::resource('/books','BookController',['as'=>'admin']);
});

//Route::get('/books/read-data','BookController@readData',['as'=>'admin']);

Route::get('/', 'IndexController@readItems');


Route::delete('/admin/books{id}', 'BookController@destroy2');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
