<?php

use App\Http\Controllers\Api\BookingsApiController;
use App\Http\Controllers\RoomImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

Route::get('/bookings', [BookingsApiController::class, 'index']);
Route::post('/bookings', [BookingsApiController::class, 'store']);

Route::delete('/room-image/{id}', [RoomImageController::class,'destroy']);
