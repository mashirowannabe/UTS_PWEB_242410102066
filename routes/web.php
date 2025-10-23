<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'showLogin']);
Route::get('/dashboard', [PageController::class, 'showDashboard']);
Route::get('/pengelolaan', [PageController::class, 'showPengelolaan']);
Route::get('/profile', [PageController::class, 'showProfile']);

// Route untuk halaman detail
Route::get('/tugas/{id}', [PageController::class, 'showTugasDetail']);