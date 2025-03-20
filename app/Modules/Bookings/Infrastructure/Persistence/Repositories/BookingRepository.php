<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Infrastructure\Persistence\Repositories;

use App\Modules\Bookings\Infrastructure\Interfaces\BookingRepositoryInterface;
use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;
use Ramsey\Collection\Collection;

readonly class BookingRepository implements BookingRepositoryInterface
{


    public function __construct(
        private Booking $model
    ) {
    }

    public function create(array $data): Booking
    {
        return $this->model->create($data);
    }

    public function destroy(int $bookingId): void
    {
        $this->model->destroy($bookingId);
    }


}