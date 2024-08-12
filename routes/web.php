<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Shield\ShieldController;
use App\Http\Controllers\UserPanel\UserPanelController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UserPanelController::class, 'index'])->name('home');
Route::get('/donation-details', [UserPanelController::class, 'donate'])->name('view.layouts.UI.show');
Route::get('/contact', [UserPanelController::class, 'contact'])->name('view.layouts.UI.contact');

Route::get('/dashboard', [UserPanelController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get(
        '/' . config('app.shield_route_prefix') . '/dashboard',
        [ShieldController::class, 'index']
    )->name('Shield.dashboard');

    // New profile route
    Route::get(
        '/' . config('app.shield_route_prefix') . '/profile',
        [ShieldController::class, 'show']
    )->name('Shield.profile');

    // Update profile route
    Route::put(
        '/' . config('app.shield_route_prefix') . '/profile/update',
        [ShieldController::class, 'updateProfile']
    )->name('Shield.profile.update');

    // Update password route
    Route::put(
        '/' . config('app.shield_route_prefix') . '/profile/update-password',
        [ShieldController::class, 'updatePassword']
    )->name('Shield.profile.update-password');
});


//volunteer dashboard
Route::middleware(['auth', 'role:volunteer'])->group(function () {
    Route::get(
        '/' . config('app.user_route_prefix') . '/dashboard',
        [UserPanelController::class, 'show']
    )->name('User.dashboard');
});