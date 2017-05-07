<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pais','PaiController');
Route::resource('provincias','ProvinciumController');
Route::get('provincias/consulta/{consulta}',[
  'uses'  =>  'ProvinciumController@consulta',
  'as'    =>  'provincias.consulta',
]);
Route::resource('localidads','LocalidadController');
Route::get('localidads/consulta/{consulta}',[
  'uses'  =>  'LocalidadController@consulta',
  'as'    =>  'localidads.consulta',
]);
Route::resource('domicilios','DomicilioController');
Route::resource('proveedors','ProveedorController');
Route::resource('clientes','ClienteController');
Route::resource('empleados','EmpleadoController');
Route::resource('compras','CompraController');
Route::resource('ventas','VentumController');
Route::resource('liquidacions','LiquidacionController');
Route::resource('productos','ProductoController');
Route::get('productos/consulta/{consulta}',[
  'uses'  => 'ProductoController@busqueda',
  'as'    =>  'productos.consulta',
]);
