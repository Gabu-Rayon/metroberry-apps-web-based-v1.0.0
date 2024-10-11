<?php

use App\Http\Controllers\DriverAppController;
use Illuminate\Support\Facades\Route;

Route::get('/driver/signup', [DriverAppController::class, 'signup'])->name('driver.signup');
Route::post('/driver/signup', [DriverAppController::class, 'signupstore'])->name('driver.signup');
Route::get('/driver/login', [DriverAppController::class, 'login'])->name('driver.login');
Route::post('/driver/login', [DriverAppController::class, 'loginstore'])->name('driver.login');

Route::get('/driver/profile', [DriverAppController::class, 'profile'])->name('driver.profile');
Route::put('/driver/profile/update/{id}', [DriverAppController::class, 'profileUpdate'])->name('driver.profile.update');

Route::put('/driver/password/update/{id}', [DriverAppController::class, 'passwordUpdate'])->name('driver.password.update');


Route::get('/driver/documents', [DriverAppController::class, 'documents'])->name('driver.documents');


Route::get('/driver/dashboard', [DriverAppController::class, 'dashboard'])->name('driver.dashboard')->middleware('auth');
Route::post('driver/personal-documents', [DriverAppController::class, 'iddocs'])->name('driver.personal-documents')->middleware('auth');



Route::post('/driver/license', [DriverAppController::class, 'license'])->name('driver.license')->middleware('auth');
Route::put('/driver/license/{id}', [DriverAppController::class, 'updateLicense'])->name('driver.license')->middleware('auth');




Route::post('/driver/psvbadge', [DriverAppController::class, 'psvbadge'])->name('driver.psvbadge')->middleware('auth');
Route::put('/driver/psvbadge/{id}', [DriverAppController::class, 'updatePsvBadge'])->name('driver.psvbadge')->middleware('auth');

Route::get('/driver/vehicle', [DriverAppController::class, 'vehicle'])->name('driver.vehicle')->middleware('auth');
Route::get('/driver/trips', [DriverAppController::class, 'trips'])->name('driver.trips')->middleware('auth');



//Driver Regsitrations View Routes and Update
Route::get('driver/registration-documentation', [DriverAppController::class, 'driverRegistrationPage'])->name('driver.registration.page')->middleware('auth');

Route::get('driver/license-document', [DriverAppController::class, 'driverLicenseDocument'])->name('driver.license.document')->middleware('auth');
Route::put('driver/license-document/{id}', [DriverAppController::class, 'driverLicenseDocumentUpdate'])->name('driver.license.document.update')->middleware('auth');

Route::get('driver/personal-id-card-documents', [DriverAppController::class, 'personalIdCardDocument'])->name('personal.id.card.document')->middleware('auth');
Route::put('driver/personal-id-card-document/{id}', [DriverAppController::class, 'personalIdCardDocumentUpdate'])->name('personal.id.card.document.update')->middleware('auth');

Route::get('driver/psvbadge-document', [DriverAppController::class, 'psvbadgeDocument'])->name('psvbadge.document')->middleware('auth');
Route::put('driver/psvbadge-document/{id}', [DriverAppController::class, 'psvbadgeDocumentUpdate'])->name('psvbadge.document.update')->middleware('auth');





//DriverTrips View Routes and Update
Route::get('driver/trips-history', [DriverAppController::class, 'tripHistorypage'])->name('trips.history.page')->middleware('auth');

Route::get('driver/trips-assigned', [DriverAppController::class, 'tripsAssignedPage'])->name('trips.assigned.page')->middleware('auth');
Route::put('driver/trip-assigned/show/{id}', [DriverAppController::class, 'tripAssignedShowPage'])->name('trip.assigned.show.page')->middleware('auth');

Route::get('driver/trips-completed', [DriverAppController::class, 'tripsCompletedPage'])->name('trips.completed.page')->middleware('auth');
Route::put('driver/trip-completed/show/{id}', [DriverAppController::class, 'tripCompletedShowPage'])->name('trip.compelete.show.page')->middleware('auth');


//Driver update profile avatar 
Route::post('driver/update-profile-picture', [DriverAppController::class, 'updateProfilePicture'])->name('driver.updateProfilePicture')->middleware('auth');