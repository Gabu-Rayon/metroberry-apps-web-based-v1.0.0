<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// All Routes
require __DIR__ . '/auth.php';
require __DIR__ . '/customer.php';
require __DIR__ . '/driver.php';
