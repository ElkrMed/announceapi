<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::apiResource("announces", ApiController::class);