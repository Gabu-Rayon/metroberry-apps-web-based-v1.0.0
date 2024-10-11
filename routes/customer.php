<?php

use App\Http\Controllers\CustomerAppController;
use Illuminate\Support\Facades\Route;

// Step 1: Welcome Page
Route::get('/customer', [CustomerAppController::class, 'WelcomePage'])->name('welcome.page');

// Step 2: Sign-up Options Page
Route::get('customer/sign-up/options', [CustomerAppController::class, 'signUpOptions'])
    ->name('sign.up.options.page');

// Step 2 (Optional): Sign-in Page for Users with Account
Route::get('customer/sign-in', [CustomerAppController::class, 'signInPage'])
    ->name('customer.sign.in.page');

// Step 3: Registration Page
Route::get('customer/register', [CustomerAppController::class, 'registerPage'])
    ->name('customer.register.page');

// Step 4: Handle Registration Submission
Route::post('customer/register', [CustomerAppController::class, 'registerCustomer'])
    ->name('auth.customer.register');

// Step 5: Sign-up Confirm email/Phone for Verification code to send Page
Route::get('customer/continue', [CustomerAppController::class, 'signUpContinuePage'])
    ->name('sign.up.continue.page');

// Step 5: Send Verification Code
Route::post('customer/register/phone/email/send-code', [CustomerAppController::class, 'sendVerificationCode'])
    ->name('phone.email.send.code');

// Step 6: Verify the Code
Route::get('customer/register/verify', [CustomerAppController::class, 'verifyCodePage'])
    ->name('verify.code.page');

// Step 7: Handle Verification Code Submission
Route::post('customer/register/verify', [CustomerAppController::class, 'verifyCode'])
    ->name('verify.code');

// Step 8: Handle Step 3 Submission (Customer Login)
Route::post('customer/login', [CustomerAppController::class, 'customerLogin'])
    ->name('auth.customer.login');

// Step 9: Handle Step 4 For Sign In and Step 8 for Customer Registering Submission
Route::get('customer/homepage', [CustomerAppController::class, 'customerIndexPage'])
    ->name('customer.index.page');

//Log Out
Route::post('customer/logout', [CustomerAppController::class, 'customerLogout'])
    ->name('logout');

Route::get('customer/booking/trip', [CustomerAppController::class, 'customerBookingPage'])
    ->name('customer.book.trip.page');

Route::post('customer/booking/trip/store', [CustomerAppController::class, 'customerBookingTrip'])
    ->name('customer.book.trip.store');

Route::post('route/locations/get/all', [CustomerAppController::class, 'getAllRouteWayPoints'])
    ->name('route.location.waypoints');


//Customer Profile
Route::get('customer/profile', [CustomerAppController::class, 'customerProfile'])
    ->name('customer.profile');

Route::put('customer/profile/{id}', [CustomerAppController::class, 'customerProfileUpdate'])
    ->name('customer.profile.update');


// Payment Methods
Route::get('customer/payment/methods', [CustomerAppController::class, 'index'])->name('customer.payment.method.page');

// Customer Addresses
Route::get('customer/addresses', [CustomerAppController::class, 'index'])->name('customer.addresses.page');

// Apply Promo Code
Route::get('customer/apply/promo/code', [CustomerAppController::class, 'index'])->name('customer.apply.promo.code.page');

// Settings
Route::get('customer/settings', [CustomerAppController::class, 'index'])->name('customer.settings.page');

// Online Support
Route::get('customer/online/support', [CustomerAppController::class, 'index'])->name('customer.online.support.page');


//customer update profile avatar 
Route::post('customer/update/profile/picture', [CustomerAppController::class, 'updateProfilePicture'])->name('customer.updateProfilePicture')->middleware('auth');



//Trips History
Route::get('customer/trips/history', [CustomerAppController::class, 'tripsHistory'])->name('customer.trip.history');

// compeleted
Route::get('customer/trips/completed', [CustomerAppController::class, 'tripsCompleted'])->name('customer.trips.completed.page');

// Booked
Route::get('customer/trips/booked', [CustomerAppController::class, 'tripsBooked'])->name('customer.trips.booked.page');

// Cancelled
Route::get('customer/trips/cancelled', [CustomerAppController::class, 'tripsCancelled'])->name('customer.trips.cancelled.page');