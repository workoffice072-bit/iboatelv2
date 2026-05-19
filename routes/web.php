<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\owner\OwnerDashboardController;

//home menu
// Home
Route::get('/', [HomeController::class, 'home'])->name('home');

// Book Now
Route::get('/yacht-charter', [HomeController::class, 'yachtCharter'])->name('yacht.charter');

Route::get('/boatel', [HomeController::class, 'boatel'])->name('boatel');

// Boat Types
Route::get('/book-type/{type}', [HomeController::class, 'BoatTypes'])->name('boat.types');
// Other Pages
Route::get('/list-your-boat', [HomeController::class, 'listYourBoat'])->name('list.your.boat');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/help', [HomeController::class, 'help'])->name('help');
//home menu

Route::get('/get-states/{countryId}',[LocationController::class, 'getStates'])->name('get.state');

//owner
Route::middleware(['auth', 'verified', 'owner'])
    ->prefix('owner')
    ->name('owner.')
    ->group(function () {
      Route::get('/dashboard', [OwnerDashboardController::class,'index'])->name('dashboard');
      Route::get('/change-password', [OwnerDashboardController::class,'changePassword'])->name('changepassword');
      Route::post('/change-password', [ProfileController::class, 'changePasswordPost'])
      ->name('password.change');

});
//owner
Route::get('/partner/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','partner'])->name('partner.dashboard');

Route::get('/guest/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','user_guest'])->name('guest.dashboard');

Route::prefix('register')->group(function(){
 Route::get('guest',[AuthController::class,'guestRegister'])->name('register.guest');
 Route::post('guest', [AuthController::class, 'storeGuest'])
    ->name('guest.register');
 Route::get('owner',[AuthController::class,'ownerRegister'])->name('register.owner');
 Route::post('owner',[AuthController::class,'storeOwner'])->name('owner.register');
 
 Route::get('partner',[AuthController::class,'partnerRegister'])->name('register.partner');
 Route::post('partner',[AuthController::class,'storePartnber'])->name('partner.register');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
