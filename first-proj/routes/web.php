<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AuthController;

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

//Route::get('admin', [RouteController::class, 'admin']);

Route::get('login', [RouteController::class, 'login']);

Route::post('store', [LocationController::class, 'store']);

Route::get('edit/{id}', [LocationController::class, 'edit']);

Route::put('update/{id}', [LocationController::class, 'update']);

Route::delete('delete/{id}', [LocationController::class, 'destroy']);

Route::get('locationadd', [LocationController::class, 'index'])->middleware('auth:web');

Route::get('locationlist', [LocationController::class, 'list'])->middleware('auth:web');

Route::get('sidebar', [RouteController::class, 'sidebar']);

Route::get('location-detail/{id}', [LocationController::class, 'location_detail']);

Route::prefix('dashboard')->group(function () {
    Route::get('userlist', [AuthController::class, 'userlist'])->name('user-list');
});

Route::prefix('auth')->group(function () {
    Route::get('admin', [RouteController::class, 'admin'])->name('login-form');
    Route::get('register', [RouteController::class, 'register'])->name('register-form');
    Route::post('signup', [AuthController::class, 'signup']);
    Route::post('process', [AuthController::class, 'check']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
