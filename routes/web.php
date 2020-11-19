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

Route::get('/', function () {
    return view('welcome');
});

//Route to event details page
Route::get('/e/eventdetails/{event}', 'App\Http\Controllers\EventController@show');
Route::delete('/e/eventdetails/{event}', 'App\Http\Controllers\EventController@destroy');

Route::get('/e/attendees/{event}', 'App\Http\Controllers\EventController@attendees');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
