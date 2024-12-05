<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SentimentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Sentiment Analysis Routes
Route::get('/', [SentimentController::class, 'index'])->name('welcome');
Route::post('/analyze', [SentimentController::class, 'analyze'])->name('analyze');
Route::get('/history', [SentimentController::class, 'history'])
    ->middleware('auth')
    ->name('history');
Route::delete('/history/{id}', [SentimentController::class, 'destroy'])->name('history.destroy');


Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
         ->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    
    Route::get('register', [RegisteredUserController::class, 'create'])
         ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});

// Dashboard and Profile Routes (Authenticated Users)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes (Login, Register)
require __DIR__.'/auth.php';