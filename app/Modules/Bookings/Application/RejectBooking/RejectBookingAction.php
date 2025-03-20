<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Application\RejectBooking;

use App\Modules\Bookings\Infrastructure\Interfaces\BookingRepositoryInterface;

readonly class RejectBookingAction
{
    public function __construct(
     private BookingRepositoryInterface $repository,
    ) {
    }

    public function handle(int $bookingId): void
    {
        $this->repository->destroy($bookingId);
    }
}