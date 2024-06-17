<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IdeaController::class, 'index'])->name('index');
Route::get('/ideas/{idea:slug}', [IdeaController::class, 'show'])->name('idea.show');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
