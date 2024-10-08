<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return redirect()->route('welcome');
})->name('login');


require __DIR__ . '/auth.php';
require __DIR__ . '/customer.php';
require __DIR__ . '/driver.php';
