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
Route::post('/upload/location', 'UploadController@saveLocation')->name('upload.location.save');
Route::get('/upload/text', 'UploadController@text')->name('upload.text.show');
Route::post('/upload/text', 'UploadController@saveText')->name('upload.text.save');
Route::get('/upload/tags', 'UploadController@tags')->name('upload.tags.show');
Route::post('/upload/tags', 'UploadController@saveTags')->name('upload.tags.save');
Route::get('/upload/confirm', 'UploadController@confirm')->name('upload.confirm.show');
Route::post('/upload/confirm', 'UploadController@saveConfirm')->name('upload.confirm.save');
Route::get('/upload/success', 'UploadController@success')->name('upload.success.show');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
