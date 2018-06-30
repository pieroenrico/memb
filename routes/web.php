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
    return view('test');
});

Route::get('/authors', 'AuthorController@index')->name('authors');
Route::get('/feed', 'FeedController@index')->name('feed');
Route::get('/upload/picture', 'UploadController@picture')->name('upload.picture.show');
Route::post('/upload/picture', 'UploadController@savePicture')->name('upload.picture.save');
Route::get('/upload/location', 'UploadController@location')->name('upload.location.show');
Route::get('/upload/text', 'UploadController@text')->name('upload.text.show');
Route::get('/upload/tags', 'UploadController@tags')->name('upload.tags.show');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
