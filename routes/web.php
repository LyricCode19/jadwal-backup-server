<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalBackupController; // ← Menambahkan ini 🔥 

Route::get('/', function () {
    return view('welcome');
});

// 🔥 Route resource untuk CRUD JadwalBackup
Route::resource('jadwal-backup', JadwalBackupController::class);
