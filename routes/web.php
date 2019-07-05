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
    return view('index');
    });
     
Route::get('/api/v1/clients/{id?}', 'Clients@index');
Route::post('/api/v1/clients', 'Clients@store');
Route::post('/api/v1/clients/{id}', 'Clients@update');
Route::delete('/api/v1/clients/{id}', 'Clients@destroy');