<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;

Route::get('/', function () {
    return redirect('/ideas');
});

// Public routes for ideas (view only)
Route::get('/ideas', [IdeaController::class, 'index']);

// Protected routes for ideas (create, update, delete) - MUST come before {idea} route
Route::middleware('auth')->group(function () {
    Route::get('/ideas/create', [IdeaController::class, 'create']);
    Route::post('/ideas', [IdeaController::class, 'store']);
    Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
    Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
    Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);
});

// Single idea detail view (must come last)
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);

// Auth routes
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);
Route::delete('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Admin route
Route::get('/admin', function () {
    return 'private only admin area';
})->can('view-admin')->middleware('auth');
