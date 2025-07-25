<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RequestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/requests', [RequestController::class, 'store']);
Route::post('/requests/{id}/cancel', [RequestController::class, 'cancel']);
Route::get('/requests/pending', [RequestController::class, 'getPendingRequests']);
