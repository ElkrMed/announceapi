<?php

use App\Http\Controllers\ApiController;

use Illuminate\Support\Facades\Route;
Route::apiResource("announces", ApiController::class);
// Public API routes
/* Route::get('/announces', [ApiController::class, 'index']);
Route::get('/announces/{id}', [ApiController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/announces', [ApiController::class, 'store']);
    Route::put('/announces/{id}', [ApiController::class, 'update']);
    Route::delete('/announces/{id}', [ApiController::class, 'destroy']);
}); */