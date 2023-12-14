<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/dashboard', 'HomeController@index');
Route::get('/profile','ProfileController@index');
Route::get('/feedback','FeedbackController@index');

Route::get('/aspirasi','AspirasiController@index');
Route::get('/aspirasi/cari','AspirasiController@cari');
Route::post('/aspirasi','AspirasiController@index');

Route::post('/aspirasi/nik','AspirasiController@aspirasinik');

Route::post('/aspirasi/tanggal','AspirasiController@aspirasitanggal');

Route::get('/aspirasi/create', 'AspirasiController@create');
Route::post('/aspirasi/store', 'AspirasiController@store');
Route::get('/aspirasi/edit/{id}', 'AspirasiController@edit');
Route::put('/aspirasi/update/{id}','AspirasiController@update');
Route::get('/aspirasi/history','AspirasiController@history');

Route::get('/aspirasi/feedback/{id}','AspirasiController@feedback');
Route::put('/aspirasi/feedupdate/{id}', 'AspirasiController@feedupdate');

Route::get('/kategori','KategoriController@index');
Route::get('/kategori/create', 'KategoriController@create');
Route::post('/kategori/store', 'KategoriController@store');
Route::get('/kategori/edit/{id}', 'KategoriController@edit');
Route::put('/kategori/update/{id}','KategoriController@update');
Route::get('/kategori/delete/{id}','KategoriController@delete');

Route::get('/history/cetak_pdf', 'AspirasiController@cetak_pdf');