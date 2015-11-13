<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/productos', function()
{
	return View::make('products');
});

Route::get('/productos', function(){
	$products=[
		["id"=>1, "nombre" => "Producto 1"],
		["id"=>2, "nombre" => "Producto 2"],
		["id"=>3, "nombre" => "Producto 3"],
		["id"=>4, "nombre" => "Producto 4"],
	];
	return View::make('products');
});

Route::get('/categorias', function()
{
	return View::make('categories');
});

Route::get('/ordenes', function()
{
	return View::make('orders');
});

