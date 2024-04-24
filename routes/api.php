<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CharacterController,
    EventController,
    LocaleController,
    HouseController
};

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/v1')->group(function(){
    Route::apiResource('character', CharacterController::class);
    Route::apiResource('event', EventController::class);
    Route::apiResource('locale', LocaleController::class);
    Route::apiResource('house', HouseController::class);
});