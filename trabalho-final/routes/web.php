<?php

Route::get('/temporadas', 'TemporadasController@index')
	->name('temporadas.index');

Route::get('/temporadas/create', 'TemporadasController@create')
    ->middleware('auth')
    ->name('temporadas.create');

Route::get('/temporadas/edit', 'TemporadasController@edit')
    ->middleware('auth')
    ->name('temporadas.edit');

Route::put('/temporadas/{temporada}', 'temporadasController@update')
    ->middleware('auth')
    ->name('temporadas.update');

Route::get('/temporadas/{temporada}', 'TemporadasController@show')
    ->name('temporadas.show');

Route::post('/temporadas', 'TemporadasController@store')
    ->middleware('auth')
    ->name('temporadas.store');


Auth::routes();

Route::get('/', 'TemporadasController@index')
	->name('home');
