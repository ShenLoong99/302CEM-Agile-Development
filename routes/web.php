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

// Sky part
Route::get('/', 'App\Http\Controllers\EventController@home');
Route::get('/insert_event', 'App\Http\Controllers\EventController@insert');
Route::post('/insert_event', 'App\Http\Controllers\EventController@store');
Route::post('/eventdetails/{event}', 'App\Http\Controllers\EventController@book');
// Wayne part
Route::get('/edit/{event}', 'App\Http\Controllers\EventController@edit');
Route::get('/update/{event}', 'App\Http\Controllers\EventController@update');
//Route to event details page - Shaun part
Route::get('/eventdetails/{event}', 'App\Http\Controllers\EventController@show');
Route::delete('/eventdetails/{event}', 'App\Http\Controllers\EventController@destroy');
//Khai Shian part
Route::get('/view_event', 'App\Http\Controllers\EventController@view_event');
Route::get('/admin_event', 'App\Http\Controllers\EventController@event');
Route::get('/registered_event', 'App\Http\Controllers\EventController@registered_event');


Auth::routes();

Route::get('/home', 'App\Http\Controllers\EventController@home');
