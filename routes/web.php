<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\BackupController;

// Redirect ke dashboard jika sudah login
Route::get('/', function () {
    return redirect('/dashboard');
});

// Group route dengan middleware auth
Route::middleware(['auth'])->group(function () {

    // ✅ Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ✅ CRUD Lembaga
    Route::resource('lembaga', LembagaController::class);

    // ✅ CRUD terbatas untuk backup
    Route::resource('backup', BackupController::class)->only([
        'index', 'create', 'store', 'show', 'destroy'
    ]);

    // (OPSIONAL) Jika ingin fitur profil, uncomment ini
    /*
    use App\Http\Controllers\ProfileController;
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    */
});

// Auth bawaan Breeze
require __DIR__.'/auth.php';
