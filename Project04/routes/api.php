<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/vehicle', 'Api\VehicleController@index');
Route::post('/vehicle', 'Api\VehicleController@store');
Route::get('/vehicle/{id}', 'Api\VehicleController@get');
Route::put('/vehicle/{id}', 'Api\VehicleController@update');
Route::delete('/vehicle/{id}', 'Api\VehicleController@destroy');
