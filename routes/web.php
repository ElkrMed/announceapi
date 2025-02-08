<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/storage/{path}', function ($path) {
    if (Storage::disk('public')->exists($path)) {
        return response()->file(storage_path("app/public/{$path}"));
    }
    abort(404);
})->where('path', '.*');
Route::get('/', function () {
    return view('welcome');
});
Route::apiResource("announces", ApiController::class);