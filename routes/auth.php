<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersAuthController;

// Step 1: Welcome Page
Route::get('/', [UsersAuthController::class, 'WelcomePage'])->name('welcome.page');

// Step 2: Sign-up Options Page
Route::get('users/sign/up/options', [UsersAuthController::class, 'signUpOptions'])
    ->name('sign.up.options.page');

// Step 3 (Optional): Sign-in Page for Users with Account
Route::get('/users/sign/in', [UsersAuthController::class, 'usersSignInPage'])->name('users.sign.in.page');

// Step 4 Auth Check
Route::post('/users/sign/in/store', [UsersAuthController::class, 'loginstore'])->name('auth.users.sign.in');



//Log Out
Route::post('users/logout', [UsersAuthController::class, 'usersSignOut'])
    ->name('logout');