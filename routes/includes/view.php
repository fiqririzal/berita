<?php

use Illuminate\Support\Facades\Route;

Route::get('/view','FrontendController@index');
Route::get('/view/{berita:slug}','FrontendController@show');


?>
