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

//Contact Route
Route::get('/send', 'SendController@sendUs');
Route::post('send', ['as'=>'send.store','uses'=>'SendController@sendUsPost']);

//Help
Route::get('/help', 'SendController@help');