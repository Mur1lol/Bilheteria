<?php

// Temporadas

Route::get('/temporadas', 'TemporadasController@index')
	->name('temporadas.index');

Route::get('/temporadas/create', 'TemporadasController@create')
    ->middleware('auth')
    ->name('temporadas.create');

Route::post('/temporadas', 'TemporadasController@store')
    ->middleware('auth')
    ->name('temporadas.store');

Route::get('/temporadas/{temporada}/cronogramas', 'TemporadasController@show')
    ->name('temporadas.show');

// Cronogramas

Route::post('/temporadas/{temporada}/cronogramas', 'CronogramasController@store')
    ->middleware('auth')
    ->name('cronogramas.store');

// Confirmações
    
Route::get('/confirmacaos', 'ConfirmacaosController@index')
    ->name('confirmacaos.index');

Route::post('/temporadas/{temporada}/cronogramas/{cronograma}', 'ConfirmacaosController@store')
    ->middleware('auth')
    ->name('confirmacaos.store');

Route::get('/confirmacaos/{confirmacao}', 'ConfirmacaosController@show')
    ->name('confirmacaos.show');

Route::get('/confirmacaos/edit/{confirmacao}', 'ConfirmacaosController@edit')
    ->middleware('auth')
    ->name('confirmacaos.edit');

Route::put('/confirmacaos/{confirmacao}', 'ConfirmacaosController@update')
    ->middleware('auth')
    ->name('confirmacaos.update');


Auth::routes();

Route::get('/', 'TemporadasController@index')
	->name('home');
