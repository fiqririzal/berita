<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'auth',
], function() {
    Route::get('/logout', 'UserController@logout');
});
Route::group([
    'middleware' => 'guest',
], function() {
    Route::post('/','UserController@login');
Route::get('/admin', 'UserController@view');

});

?>
