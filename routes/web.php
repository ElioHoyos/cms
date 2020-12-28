<?php


Route::get('/', function () {
    return view('welcome');
});

//Rutas del proyecto
Route::get('/login', 'ConnectController@getLogin');

