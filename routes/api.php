<?php

use App\Http\Controllers\API\AlumniController;
use App\Http\Controllers\API\JadwalController;
use App\Http\Controllers\API\LamaranController;
use App\Http\Controllers\API\LowonganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('lowongan', LowonganController::class);
Route::apiResource('lamaran', LamaranController::class);
Route::apiResource('alumni', AlumniController::class);
Route::apiResource('jadwal', JadwalController::class);