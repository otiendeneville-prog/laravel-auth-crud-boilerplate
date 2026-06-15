<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;

Route::get('/', function () {
    return redirect('/ideas');
});

// Auth Routes (Named so the 'auth' middleware knows where to redirect)
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [SessionsController::class, 'create'])->name('login');
Route::post('/login', [SessionsController::class, 'store']);
Route::delete('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');

// Protected Idea Routes (Only for logged-in users)
Route::middleware('auth')->group(function () {
    Route::get('/ideas', [IdeaController::class, 'index']); // Moved inside auth so users only see their own ideas
    Route::get('/ideas/create', [IdeaController::class, 'create']);
    Route::post('/ideas', [IdeaController::class, 'store']);
    Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
    Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
    Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);
});

// Public Idea Routes (Anyone can see a specific idea)
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);

// Admin route
Route::get('/admin', function () {
    return 'private only admin area';
})->can('view-admin')->middleware('auth');
