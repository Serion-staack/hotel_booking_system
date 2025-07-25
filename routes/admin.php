<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;;




Route::middleware([\App\Http\Middleware\IsAdmin::class])->group(function () {
    Route::get('/bookings', [AdminController::class, 'bookings'])->name('bookings');
    Route::post('/bookings/{id}/status', [AdminController::class, 'updateStatus'])->name('bookings.updateStatus');
    Route::delete('/bookings/{id}', [AdminController::class, 'bookingDelete'])->name('bookings.delete');

});

