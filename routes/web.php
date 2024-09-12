<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Shield\ShieldController;
use App\Http\Controllers\Shield\SliderController;
use App\Http\Controllers\UserPanel\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/donate', [HomeController::class, 'donate'])->name('view.layouts.UI.show');
Route::get('/contact', [HomeController::class, 'contact'])->name('view.layouts.UI.contact');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';



// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get(
//         '/' . config('app.shield_route_prefix') . '/dashboard',
//         [ShieldController::class, 'index']
//     )->name('Shield.dashboard');

//     // New profile route
//     Route::get(
//         '/' . config('app.shield_route_prefix') . '/profile',
//         [ShieldController::class, 'show']
//     )->name('Shield.profile');

//     // Update profile route
//     Route::put(
//         '/' . config('app.shield_route_prefix') . '/profile/update',
//         [ShieldController::class, 'updateProfile']
//     )->name('Shield.profile.update');

//     // Update password route
//     Route::put(
//         '/' . config('app.shield_route_prefix') . '/profile/update-password',
//         [ShieldController::class, 'updatePassword']
//     )->name('Shield.profile.update-password');

//     // New profile route
//     Route::get(
//         '/' . config('app.shield_route_prefix') . '/slider',
//         [SliderController::class, 'index']
//     )->name('Shield.slider.index');
//     Route::get(
//         '/' . config('app.shield_route_prefix') . '/slider/create',
//         [SliderController::class, 'create']
//     )->name('Shield.slider.create');
//     Route::post(
//         '/' . config('app.shield_route_prefix') . '/slider/store',
//         [SliderController::class, 'store']
//     )->name('Shield.slider.store');
// });

Route::middleware(['auth', 'role:admin'])->prefix(config('app.shield_route_prefix'))->group(function () {
    Route::get('/dashboard', [ShieldController::class, 'index'])->name('Shield.dashboard');

    // Profile routes
    Route::prefix('profile')->group(function () {
        Route::get('/', [ShieldController::class, 'show'])->name('Shield.profile');
        Route::put('/update', [ShieldController::class, 'updateProfile'])->name('Shield.profile.update');
        Route::put('/update-password', [ShieldController::class, 'updatePassword'])->name('Shield.profile.update-password');
    });

    // Slider routes
    Route::prefix('slider')->group(function () {
        Route::get('/', [SliderController::class, 'index'])->name('Shield.slider.index');
        Route::get('/create', [SliderController::class, 'create'])->name('Shield.slider.create');
        Route::post('/store', [SliderController::class, 'store'])->name('Shield.slider.store');
    
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('shield.slider.edit');
        Route::post('/update/{id}', [SliderController::class, 'update'])->name('Shield.slider.update');
        Route::get('/destroy/{id}', [SliderController::class, 'destroy'])->name('shield.slider.destroy');
    });
});


Route::middleware(['auth', 'role:volunteer'])
    ->prefix(config('app.user_route_prefix'))
    ->group(function () {
        // Volunteer dashboard
        Route::get('/dashboard', [HomeController::class, 'show'])->name('User.dashboard');

        // Profile routes
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });