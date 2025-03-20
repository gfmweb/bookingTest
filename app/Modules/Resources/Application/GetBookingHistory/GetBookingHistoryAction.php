<?php

declare(strict_types=1);

namespace App\Modules\Resources\Application\GetBookingHistory;

use App\Modules\Bookings\Infrastructure\Interfaces\BookingRepositoryInterface;
use App\Modules\Resources\Infrastructure\Interfaces\ResourceRepositoryInterface;
use Illuminate\Support\Collection;

readonly class GetBookingHistoryAction
{
    public function __construct(
        private ResourceRepositoryInterface $repository
    ) {
    }

    public function handle(int $resourceId): array
    {
        return $this->repository->getBookingsByResourceId($resourceId);
    }
}
