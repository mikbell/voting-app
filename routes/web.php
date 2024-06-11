<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
