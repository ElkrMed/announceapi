<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::apiResource("announces", ApiController::class);
// In routes/api.php or web.php

Route::get('/csrf-token', function() {
    return response()->json(['csrfToken' => csrf_token()]);
});
Route::post('/set-csrf-token', function (Request $request) {
    $csrfToken = $request->input('csrfToken');
    // Set the CSRF token in a cookie for the frontend domain
    return response()->json(['status' => 'success'])
        ->cookie('XSRF-TOKEN', $csrfToken, 60, '/', 'your-frontend-domain.com', false, true); // Set to frontend domain
});
// Public API routes
/* Route::get('/announces', [ApiController::class, 'index']);
Route::get('/announces/{id}', [ApiController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/announces', [ApiController::class, 'store']);
    Route::put('/announces/{id}', [ApiController::class, 'update']);
    Route::delete('/announces/{id}', [ApiController::class, 'destroy']);
}); */