<?php


Route::get('/', function () {
    return view('welcome');
});

//Rutas del proyecto
Route::get('/login', 'ConnectController@getLogin')->name('login');
Route::get('/register', 'ConnectController@getRegister')->name('register');

// Route::post('/register', 'ConnectController@postRegister')->name('register');
