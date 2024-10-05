<?php

use App\Http\Controllers\CustomerAppController;
use Illuminate\Support\Facades\Route;

// Welcome Page
Route::get('/customer', [CustomerAppController::class, 'WelcomePage'])->name('welcome.page');

// Sign-up Options Page
Route::get('customer/sign-up/options', [CustomerAppController::class, 'signUpOptions'])
    ->name('sign.up.options.page');


// Registration Page
Route::get('customer/register', [CustomerAppController::class, 'registerPage'])
    ->name('customer.register.page');

// Handle Registration Submission
Route::post('customer/register', [CustomerAppController::class, 'registerCustomer'])
    ->name('auth.customer.register');

// Sign-up Options Page
Route::get('customer/continue', [CustomerAppController::class, 'signUpContinuePage'])
    ->name('sign.up.continue.page');

// Phone Number Input Page (Step 2)
Route::get('customer/register/phone', [CustomerAppController::class, 'phoneInputPage'])
    ->name('phone.input.page');

// Send Verification Code (Step 3)
Route::post('customer/register/phone/send-code', [CustomerAppController::class, 'sendVerificationCode'])
    ->name('phone.send.code');

// Verify the Code (Step 4)
Route::get('customer/register/verify', [CustomerAppController::class, 'verifyCodePage'])
    ->name('verify.code.page');

// Handle Verification Code Submission
Route::post('customer/register/verify', [CustomerAppController::class, 'verifyCode'])
    ->name('verify.code');


// Registration Page
Route::get('customer/sign-in', [CustomerAppController::class, 'signInPage'])
    ->name('customer.sign.in.page');

// Handle Registration Submission
Route::post('customer/login', [CustomerAppController::class, 'customerLogin'])
    ->name('auth.customer.login');