<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/temporadas', 'TemporadasController@index')
	->name('temporadas.index');

Route::get('/temporadas/create', 'TemporadasController@create')
    ->middleware('auth')
    ->name('temporadas.create');

Route::get('/temporadas/{temporada}', 'TemporadasController@show')
    ->name('temporadas.show');

Route::post('/temporadas', 'TemporadasController@store')
    ->middleware('auth')
    ->name('temporadas.store');


Auth::routes();

Route::get('/home', 'HomeController@index')
	->name('home');
