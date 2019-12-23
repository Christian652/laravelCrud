<?php
Route::get('/', 'userController@index')->name('site.home');

Route::resource('usuarios', 'userController')->names('user')->parameters(['usuarios'=>'user']);
