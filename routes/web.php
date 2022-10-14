<?php

use Illuminate\Support\Facades\Route;

require_once('includes/kategori.php');
require_once('includes/berita.php');
require_once('includes/admin.php');

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
    return view('welcome');
});
