<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/jobs',         [ApiController::class, 'jobs']);
Route::get('/applications', [ApiController::class, 'applications']);
Route::get('/payments',     [ApiController::class, 'payments']);
Route::get('/contacts',     [ApiController::class, 'contacts']);
Route::get('/messages',     [ApiController::class, 'messages']);
Route::get('/users',        [ApiController::class, 'users']);