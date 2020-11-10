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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'Tienda'], function(){
    Route::post('cliente', 'ClienteController@store');
    Route::patch('cliente/{id}', 'ClienteController@update')->name('cliente');
    Route::delete('cliente/{id}', 'ClienteController@destroy')->name('cliente');

    Route::post('factura', 'FacturaController@store');
    Route::post('factura/{id}', 'FacturaController@destroy')->name('factura');

    Route::post('producto', 'ProductoController@store');
    Route::patch('producto/{id}', 'ProductoController@update')->name('producto');
    Route::patch('producto/{id}', 'ProductoController@destoy')->name('producto');


    Route::post('detalles', 'Detalle_facturaController@store');
    Route::patch('detalles/{id}', 'ProductoController@destoy')->name('detallesfactura');
});