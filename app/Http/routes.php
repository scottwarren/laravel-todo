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

// App routes

// Home page
Route::get('/', 'Todo\PageController@homePageAction');

// routes for a front end app using our API
Route::get('/dynamicTodo', 'Todo\TodoController@dynamicAction');
Route::get('/dynamicTodo/{id}', 'Todo\TodoController@dynamicShowOneAction');

// routes for a 'static' page (eg not using API or Javascript to load routes)
Route::get('/nonDynamicTodo', 'Todo\TodoController@showAllAction');
Route::get('/nonDynamicTodo/{id}', 'Todo\TodoController@showOneAction');


// API routes
Route::get('/api/tasks/', 'Todo\ApiController@showAllAction');
Route::get('/api/tasks/{id}', 'Todo\ApiController@showOneAction');
Route::post('/api/save', 'Todo\ApiController@saveAction');
