<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ReservationStatusController@index');
Route::get('/create','ReservationStatusController@create');
Route::get('/ReservationStatus/{ReservationStatus}', 'ReservationStatusController@show');
Route::get('/ReservationStatus/{ReservationStatus}/edit','ReservationStatusController@edit');

Route::post('/create','ReservationStatusController@store');
Route::put('/ReservationStatus/{ReservationStatus}', 'ReservationStatusController@update');

Route::delete('/ReservationStatus/{ReservationStatus}','ReservationStatusController@destroy');