<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Application\CreateBooking;

use App\Modules\Bookings\Infrastructure\Interfaces\BookingRepositoryInterface;
use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;
use App\Modules\Bookings\Infrastructure\ValueObjects\CreateBookingVO;

readonly class CreateBookingAction
{
    public function __construct(
        private BookingRepositoryInterface $repository,
    ) {
    }

    public function handle(CreateBookingVO $bookingVO): Booking
    {
        return $this->repository->create($bookingVO->asArray());
    }
}