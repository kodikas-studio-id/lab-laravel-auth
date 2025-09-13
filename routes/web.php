<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Auth
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

// Guest
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::get('login', [LoginController::class, 'create'])->name('login');

// Logic
// Route::post('logout', [LogoutController::class, 'destroy'])->name('logout');
// Route::post('login', [LoginController::class, 'store'])->name('login');
// Route::post('register', [RegisterController::class, 'store'])->name('register');