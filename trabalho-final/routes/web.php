<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
 $pagina = "<h1>Hello Routes!</h1>";
 $pagina .= "<h2>Me veja no browser</h2>";
 return $pagina;
});

Route::get('/artigos', function() {
 return '<h1>Artigos do Blog</h1>';
});
Route::get('/artigos/laravel', function() {
 $pagina = "<h1>Hello Routes!</h1>";
 $pagina .= "<h2>Categoria: Laravel</h2>";
 return $pagina;
});

Route::get('/artigos', function() {
 return view('template');
});


Auth::routes();

Route::get('/home', 'HomeController@index')
	->name('home');
