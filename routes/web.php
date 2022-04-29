<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
Route::get('event/view/{id}', [EventController::class,'singleEvent']);
Route::get('event/delete/{id}', [EventController::class,'deleteEvent']);
Route::get('event/edit/{id}', [EventController::class,'getSingleEvent']);
Route::post('add/event', [EventController::class,'insertEvent']);
Route::post('update/event/{id}', [EventController::class,'updateEvent']);
Route::get('event/list', [EventController::class,'getEventList']);
