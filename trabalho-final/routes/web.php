<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/temporada', 'TemporadaController@index')
	->name('temporada.index');




Auth::routes();

Route::get('/home', 'HomeController@index')
	->name('home');
