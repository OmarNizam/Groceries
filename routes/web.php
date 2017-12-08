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

// groceries routes

Route::get('/', 'GroceriesController@index')->name('home');

Route::get('/groceries/create', 'GroceriesController@create');

Route::post('/groceries', 'GroceriesController@store');

Route::get('/groceries/{grocery}', 'GroceriesController@show');

Route::get('/groceries/{grocery}/edit', 'GroceriesController@edit');

Route::patch('/groceries/{grocery}', 'GroceriesController@update');

Route::delete('/groceries/{grocery}', 'GroceriesController@destroy');

// routes for .csv file
Route::get('/importExport', 'MaatwebsiteDemoController@importExport');

Route::get('/downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');

Route::post('/importExcel', 'MaatwebsiteDemoController@importExcel');



// signup and signin routes
Route::get('/register', 'RegisterationController@create');

Route::post('/register', 'RegisterationController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');
