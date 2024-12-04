<?php

use App\Http\Controllers\SentimentController;


Route::get('/', [SentimentController::class, 'index'])->name('welcome');
Route::post('/analyze', [SentimentController::class, 'analyze'])->name('analyze');
Route::get('/history', [SentimentController::class, 'history'])->name('history');


