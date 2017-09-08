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

Route::get('/', 'HomeController@index');
//index del dashboard
Route::get('/', 'HomeController@index');
//no se sabe para que es
Route::get('/quotes', 'QuotesController@index');
//crear usuario
Route::get('/create_user', 'UserController@create');
//insert user db usuario
Route::post('/create_user', 'UserController@store');
//mostrar todos los usuarios
Route::get('/show_user', 'UserController@show');
//informacion de un usuario por id
Route::post('/update_user', 'UserController@update');
//actualizar datos del usuario por id
Route::get('/show_user/{id}', 'UserController@edit');
//crear cliente
Route::get('/create_client', 'ClientController@create');
//insertar registros del cliente en la bd y validar los mismos
Route::post('/create_client', 'ClientController@store');
//mostrar clientes
Route::get('/show_client', 'ClientController@show');
//editar un clientes por id
Route::get('/show_client/{id}', 'ClientController@edit');
//actualizar informacion de un cliente 
Route::post('/update_client', 'ClientController@update');
//solicitudes de citas
Route::get('/quotes_client', 'QuotesController@store');
//solicitudes de cotizaciones
Route::get('/butget_client', 'BudgetController@create');
//mostrar solicitudes de cotizaciones
Route::get('/show_budget', 'BudgetController@show');
//Crear registro de resultados
Route::get('/create_result', 'ResultController@create');
//Ver estados de cuenta
Route::get('/show_accountstatus', 'AccountStatusController@show');
//crear nuevo producto
Route::get('/create_product', 'ServiceController@create');
//crear nuevo producto
Route::get('/show_product', 'ServiceController@show');
