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

Route::get('/', function () {    return view('welcome');})->name('welcome');

Route::get('/vehicules', 'VehiculeController@index')->name('vehicules.index');
Route::get('/vehicules/create','VehiculeController@create')->name('vehicules.create');
Route::get('/vehicules/{id}/edit','VehiculeController@edit')->name('vehicules.edit')->where('id', '[0-9]+');
Route::post('/vehicules','VehiculeController@store')->name('vehicules.store');
Route::put('/vehicules/{id}', 'VehiculeController@update')->name('vehicules.update')->where('id', '[0-9]+');
Route::get('/vehicules/{id}', 'VehiculeController@show')->name('vehicules.show')->where('id', '[0-9]+');
Route::delete('/vehicules/{id}', 'VehiculeController@destroy')->name('vehicules.destroy')->where('id', '[0-9]+');
Route::get('/careers', function () {    return view('careers');})->name('careers');

