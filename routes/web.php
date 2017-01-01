<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/about', "PagesController@about");

Route::get('/submit', "JobsController@create");
Route::post('/submit', "JobsController@store");

Route::get('/web', 'PagesController@web');
Route::get('/desktop', 'PagesController@desktop');
Route::get('/mobile', 'PagesController@mobile');
Route::get('/network', 'PagesController@network');
Route::get('/system', 'PagesController@system');
