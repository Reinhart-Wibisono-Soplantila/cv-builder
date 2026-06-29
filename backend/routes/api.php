<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

use App\Http\Controllers\CvController;
use App\Http\Controllers\CvSectionController;
use App\Http\Controllers\CvSectionItemController;

Route::apiResource('cvs', CvController::class);
Route::apiResource('cv-sections', CvSectionController::class);
Route::apiResource('cv-section-items', CvSectionItemController::class);
