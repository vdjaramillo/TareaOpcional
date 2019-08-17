<?php

Route::get('/A765', function () {return view('ZonaInicio');})->middleware('auth');
Route::get('/A765/registrar', 'Registrar@vista')->middleware('auth');
Route::post('/A765/registrar','Registrar@index')->name('regveh')->middleware('auth');
Route::get('/A765/estadisticas', 'estadistica@index')->middleware('auth');
Route::get('/A765/listar', 'listar@index')->middleware('auth');
Route::get('/', function () {return view('ErrorUrl');});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
