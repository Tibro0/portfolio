<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AnimationTextController;
use App\Http\Controllers\Admin\BackendSkillController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SocialIconController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Frontend All Route
Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('admin')->as('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Profile all Route
    Route::controller(AdminProfileController::class)->group(function () {
        Route::get('profile', 'index')->name('profile.index');
        Route::post('profile/update', 'profileUpdate')->name('profile.Update');
        Route::post('profile/password/update', 'updatePassword')->name('profile.password.Update');
    });
    // Animation Text
    Route::resource('animation-text', AnimationTextController::class);
    // Tag
    Route::resource('tag', TagController::class);
    // Social Icon
    Route::resource('social-icon', SocialIconController::class);
    // Counter
    Route::resource('counter', CounterController::class);

    // About All Route
    Route::controller(AboutController::class)->group(function () {
        Route::get('about', 'index')->name('about.index');
        Route::post('about/update', 'aboutUpdate')->name('about.update');
    });

    // Backend Skill
    Route::put('/backend-skill-card-title-one-update/{id}', [BackendSkillController::class, 'backendSkillCardTitleUpdate'])->name('backend-skill-card-title-one-update');
    Route::resource('backend-skill', BackendSkillController::class);
});

require __DIR__ . '/auth.php';
