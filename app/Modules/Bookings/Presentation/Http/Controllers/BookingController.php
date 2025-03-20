<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Presentation\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Bookings\Application\CreateBooking\CreateBookingAction;
use App\Modules\Bookings\Application\RejectBooking\RejectBookingAction;
use App\Modules\Bookings\Infrastructure\ValueObjects\CreateBookingVO;
use App\Modules\Bookings\Presentation\Http\Requests\CreateBookingRequest;
use Illuminate\Http\JsonResponse;

class BookingController extends Controller
{
    public function createBooking(CreateBookingAction $action, CreateBookingRequest $request): JsonResponse
    {
        return response()->json($action->handle(CreateBookingVO::fromRequest($request->all())), 201);
    }

    public function rejectBooking(int $id, RejectBookingAction $action): JsonResponse
    {
        $action->handle($id);
        return response()->json(null, 204);
    }
}
