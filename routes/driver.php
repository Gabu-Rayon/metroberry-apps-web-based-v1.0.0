<?php

use App\Http\Controllers\DriverAppController;
use Illuminate\Support\Facades\Route;

Route::get('/driver/signup', [DriverAppController::class, 'signup'])->name('driver.signup');
Route::post('/driver/signup', [DriverAppController::class, 'signupstore'])->name('driver.signup');
Route::get('/driver/login', [DriverAppController::class, 'login'])->name('driver.login');
Route::post('/driver/login', [DriverAppController::class, 'loginstore'])->name('driver.login');
