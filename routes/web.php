<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

// Index
Route::get('/', [MainController::class, 'home'])
    ->name('home');
// Show
Route::get('/saint/show/{id}', [MainController::class, 'saintShow'])
    ->name('saint.show');
// Delete 
Route::get('/saint/destroy/{id}', [MainController::class, 'saintDestroy'])
    ->name('saint.destroy');
// Create
Route::get('/saint/create/', [MainController::class, 'saintCreate'])
    ->name('saint.create');
// Store
Route::post('/saint/store/', [MainController::class, 'saintStore'])
    ->name('saint.store');
