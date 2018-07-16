<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/olamundo', function(){
	return "Hello World!";
});

Route::get('/olapessoa/{name}', function($name='Rafa'){
	return "Hello " . $name;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/copo', function(){
	return "Vai toma no copo";
});

Route::get('paramaiusculo/{palavra}','StringsController@paraMaiusculo'); 

Route::get('paramaiusculoformatada/{palavra}','StringsController@paraMaiusculoFormatada'); 