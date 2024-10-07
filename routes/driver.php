<?php

use App\Http\Controllers\DriverAppController;
use Illuminate\Support\Facades\Route;

Route::get('/driver/signup', [DriverAppController::class, 'signup'])->name('driver.signup');
Route::post('/driver/signup', [DriverAppController::class, 'signupstore'])->name('driver.signup');
Route::get('/driver/login', [DriverAppController::class, 'login'])->name('driver.login');
Route::post('/driver/login', [DriverAppController::class, 'loginstore'])->name('driver.login');

Route::get('/driver/profile', [DriverAppController::class, 'profile'])->name('driver.profile');

Route::get('/driver/dashboard', [DriverAppController::class, 'dashboard'])->name('driver.dashboard')->middleware('auth');
Route::post('driver/personal-documents', [DriverAppController::class, 'iddocs'])->name('driver.personal-documents')->middleware('auth');
Route::post('/driver/license', [DriverAppController::class, 'license'])->name('driver.license')->middleware('auth');
Route::post('/driver/psvbadge', [DriverAppController::class, 'psvbadge'])->name('driver.psvbadge')->middleware('auth');
