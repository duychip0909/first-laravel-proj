<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

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

Route::get('/', [RouteController::class, 'returnHome']);

Route::get('about', [RouteController::class, 'returnAbout']);

Route::get('rooms', [RouteController::class, 'returnOurroom']);

Route::get('contact', [RouteController::class, 'returnContact']);
