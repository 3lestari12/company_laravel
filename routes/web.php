<?php

use App\Http\Controllers\FrontContoller;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\WelcomeController;
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

Route::resource('/', FrontContoller::class);
Route::resource('/tentangkami', TentangKamiController::class);
Route::resource('/loker', LokerController::class);
Route::resource('/welcome', WelcomeController::class);