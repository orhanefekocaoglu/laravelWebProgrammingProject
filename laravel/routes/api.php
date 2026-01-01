<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/customersapi', [CustomerApiController::class, 'index']);
Route::post('/customersapi', [CustomerApiController::class, 'store']);
