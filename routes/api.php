<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
});

Route::get('/jobs',         [ApiController::class, 'jobs']);
Route::get('/applications', [ApiController::class, 'applications']);
Route::get('/payments',     [ApiController::class, 'payments']);
Route::get('/contacts',     [ApiController::class, 'contacts']);
Route::get('/messages',     [ApiController::class, 'messages']);
Route::get('/users',        [ApiController::class, 'users']);
