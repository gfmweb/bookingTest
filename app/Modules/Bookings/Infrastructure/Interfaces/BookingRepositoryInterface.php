<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Infrastructure\Interfaces;

use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;
use App\Modules\Bookings\Infrastructure\ValueObjects\CreateBookingVO;

interface BookingRepositoryInterface
{
    public function create(array $data): Booking;

    public function destroy(int $bookingId): void;
}