<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\LocationController2;

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


Route::get('sidebar', [RouteController::class, 'sidebar']);

Route::get('location-detail/{id}', [LocationController::class, 'location_detail']);

Route::prefix('dashboard')->group(function () {
    Route::get('userlist', [AuthController::class, 'userlist'])->name('user-list');
});

Route::prefix('auth')->group(function () {
    Route::get('admin', [RouteController::class, 'admin'])->name('login-form');
    Route::get('register', [RouteController::class, 'register'])->name('register-form');
    Route::post('signup', [AuthController::class, 'signup']);
    Route::post('process', [AuthController::class, 'check'])->name('processLogin');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('auth')->prefix('admin')->group(function() {
    Route::group(['prefix' => 'location'], function() {
        Route::post('store', [LocationController2::class, 'store'])->name('location.store');
        Route::get('edit/{id}', [LocationController::class, 'edit'])->name('location.edit');
        Route::post('update/{id}', [LocationController2::class, 'update'])->name('location.update');
        Route::get('delete/{id}', [LocationController2::class, 'destroy'])->name('location.delete');
        Route::get('create', [LocationController::class, 'list'])->name('location.add');
        Route::get('list', [LocationController::class, 'index'])->name('location.list');
        Route::get('filter/{id}', [LocationController::class, 'filter']);
        Route::get('/hide/{id}', [LocationController2::class, 'hide']);
    });
});

Route::get('information-filled', [LocationController::class, 'filled_info']);

Route::get('/booking', [LocationController::class, 'book'])->name('book-form');

Route::get('/storeBooking', [LocationController::class, 'storeBooking']);

Route::get('order-list', [RouteController::class, 'orderlist'])->name('order-list');

Route::get('/view-detail/{id}', [OrderController::class, 'orderDetail']);

Route::get('/add-room', [RoomController::class, 'routeRoomAdd'])->name('routeRoomAdd');

Route::get('/storeRoom', [RoomController::class, 'storeRoom']);

Route::get('return_page', [RouteController::class, 'returnAbout']);














