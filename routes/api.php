<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public API routes
Route::get('/announces', [ApiController::class, 'index']);
Route::get('/announces/{id}', [ApiController::class, 'show']);

// Protected API routes (if authentication is needed)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/announces', [ApiController::class, 'store']);
    Route::put('/announces/{id}', [ApiController::class, 'update']);
    Route::delete('/announces/{id}', [ApiController::class, 'destroy']);
});