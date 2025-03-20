<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Modules\Bookings\Presentation\Http\Controllers\BookingController;


Route::prefix('api')->group(function () {
    Route::prefix('bookings')->group(function () {
        Route::post('/', [BookingController::class, 'createBooking']);
        Route::delete('{id}', [BookingController::class, 'rejectBooking']);
    });
});
