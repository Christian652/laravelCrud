<?php
Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios', 'userController')->names('user')->parameters(['usuarios'=>'user']);
