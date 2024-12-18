<?php

use App\Http\Controllers\CourtController;
use App\Http\Controllers\ProfileController;
use App\Models\Court;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','rolemanager:user'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin');
})->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');


Route::get('/vendor/dashboard', function () {
    return view('vendor');
})->middleware(['auth', 'verified','rolemanager:vendor'])->name('vendor');


Route::get('/register-court', function () {
    return view('register-court');
})->name('register-court');


Route::get('vendor', [CourtController::class, 'create'])->name('court.create');
Route::post('court-register', [CourtController::class, 'store'])->name('court.store');








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
