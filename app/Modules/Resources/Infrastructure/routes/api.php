<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Modules\Resources\Presentation\Http\Controllers\ResourceController;

Route::prefix('api')->group(function () {
    Route::prefix('resources')->group(function () {
        Route::get('/', [ResourceController::class, 'list']);
        Route::get('/types', [ResourceController::class, 'getTypes']);
        Route::post('/', [ResourceController::class, 'create']);
        Route::get('/{id}/bookings', [ResourceController::class, 'getBookings']);
    });
});

