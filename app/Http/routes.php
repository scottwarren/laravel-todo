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

Route::get('/', 'Todo\TodoController@showAllAction');
Route::get('/{id}', 'Todo\TodoController@showOneAction');
Route::post('/save', 'Todo\TodoController@saveAction');
