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

Route::get('/view_event', 'App\Http\Controllers\EventListController@view_event');

Route::get('/admin_event', 'App\Http\Controllers\EventListController@event');

Route::get('/registered_event', 'App\Http\Controllers\EventListController@registered_event');

Route::get('/attendees', 'App\Http\Controllers\EventListController@attendees');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
