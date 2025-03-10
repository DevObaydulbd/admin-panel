<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Root Route - Home Page
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Authentication Routes
require __DIR__.'/auth.php';

// Admin Routes Group
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Admin Users CRUD
    Route::resource('users', UserController::class);
});
