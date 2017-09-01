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
//index del dashboard
Route::get('/quotes', 'QuotesController@index');
//crear usuario
Route::get('/create_user', 'QuotesController@create');
//mostrar todos los usuarios
Route::get('/show_user', 'QuotesController@show');
//crear cliente
Route::get('/create_client', 'ClientController@create');
//mostrar clientes
Route::get('/show_client', 'ClientController@show');
//solicitudes de citas
Route::get('/quotes_client', 'QuotesController@store');
//solicitudes de cotizaciones
Route::get('/butget_client', 'BudgetController@create');
//mostrar solicitudes de cotizaciones
Route::get('/show_budget', 'BudgetController@show');