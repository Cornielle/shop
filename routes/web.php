<?php
Route::get('/', function () {
    return view('welcome');
});


Route::get('/prueba', function(){

	return 'Soy una ruta de prueba';
});


Route::get('/test','TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
