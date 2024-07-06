<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\UserController;

Route::get('/', [IdeaController::class, 'index'])->name('idea.index');
Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/ideas/{idea:slug}', [IdeaController::class, 'show'])->name('idea.show');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
