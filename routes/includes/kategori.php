<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/kategori/create','KategoriController@create');
Route::get('/kategori','KategoriController@index');
Route::post('/kategori','KategoriController@store');
Route::get('/kategori/{kategori_id}','KategoriController@show');
Route::get('/kategori/{kategori_id}/edit','KategoriController@edit');
Route::put('/kategori/{kategori_id}','KategoriController@update');
Route::post('/kategori-hapus/{kategori_id}','KategoriController@destroy');
