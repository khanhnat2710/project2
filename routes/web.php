<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\customerController;
use App\Http\Controllers\Admin\foodController;
use App\Http\Controllers\Admin\paymentMethodController;
use App\Http\Controllers\Admin\seatTypeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('admin', adminController::class);

Route::resource('customer', customerController::class);

Route::resource('paymentMethod', paymentMethodController::class);

Route::resource('food', foodController::class);

Route::resource('seatType', seatTypeController::class);

Route::post('/admin/store', [AdminController::class, 'store']);


