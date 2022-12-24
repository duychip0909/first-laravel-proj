<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\LocationController;

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

Route::get('/', [LocationController::class, 'returnHome']);

Route::get('about', [RouteController::class, 'returnAbout']);

Route::get('rooms', [RouteController::class, 'returnOurroom']);

Route::get('contact', [RouteController::class, 'returnContact']);

Route::get('admin', [RouteController::class, 'admin']);

Route::post('store', [LocationController::class, 'store']);

Route::get('locationlist', [LocationController::class, 'show']);

