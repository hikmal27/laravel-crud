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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', 'FormsController@index');
Route::get('/form', 'FormsController@create');
Route::get('/table', 'FormsController@show');
Route::post('/form', 'FormsController@store');
Route::post('/table', 'FormsController@store');
Route::delete('/table/{form}', 'FormsController@destroy');
Route::get('/table/{form}/edit', 'FormsController@edit');
Route::patch('/table/{form}', 'FormsController@update');