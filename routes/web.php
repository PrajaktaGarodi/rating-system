<?php

use App\Http\Controllers\CourtController;
use App\Http\Controllers\ProfileController;
use App\Models\Court;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RatingController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('user/dashboard',[RatingController::class, 'show'])->middleware(['auth', 'verified','rolemanager:user'])->name('dashboard');

// Route::get('/admin/dashboard', function () {
//     return view('admin.admin');
// })->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');



// Route::get('/vendor/dashboard', function () {
//     return view('vendor.vendor');
// })->middleware(['auth', 'verified','rolemanager:vendor'])->name('vendor');


Route::get('/admin/dashboard',[RatingController::class, 'admin'])->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');





Route::get('/register-court', function () {
    return view('vendor.register-court');
})->name('register-court');


Route::get('vendor', [CourtController::class, 'create'])->name('court.create');
Route::post('vendor.court-register', [CourtController::class, 'store'])->name('court.store');
Route::get('vendor/dashboard',[CourtController::class, 'list'])->middleware(['auth', 'verified','rolemanager:vendor'])->name('vendor');








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//user route
Route::get('users/show-court',[CourtController::class,'showcourt'])->middleware(['auth', 'verified','rolemanager:user'])->name('users.show-court');   


Route::get('users/court_details/{id}',[CourtController::class, 'showdetails'])->middleware(['auth', 'verified','rolemanager:user'])->name('user.court_details'); 


// vendor routes

Route::get('vendor/view-food-court',[CourtController::class,'vendor_courts'])->middleware(['auth', 'verified','rolemanager:vendor'])->name('vendor.view-food-court'); 


// vendor  edit routes

Route::get('vendor/food-court-edit/{id}',[CourtController::class,'edit_food_courts'])->middleware(['auth', 'verified','rolemanager:vendor'])->name('vendor.food-court-edit');


Route::post('vendor/update-food-court/{id}',[CourtController::class,'update_food_courts'])->middleware(['auth', 'verified','rolemanager:vendor'])->name('vendor.update-food-court');


Route::post('user/rating',[RatingController::class,'store'])->middleware(['auth', 'verified','rolemanager:user'])->name('rating');

