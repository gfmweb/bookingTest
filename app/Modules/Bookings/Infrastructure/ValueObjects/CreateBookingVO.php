<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Infrastructure\ValueObjects;

use Illuminate\Support\Carbon;

readonly class CreateBookingVO
{
    public function __construct(
        public int $resourceId,
        public int $userId,
        public Carbon $startTime,
        public Carbon $endTime
    ) {
    }

    public function asArray(): array
    {
        return [
            'resource_id' => $this->resourceId,
            'user_id' => $this->userId,
            'start_time' => $this->startTime->format('Y-m-d H:i:s'),
            'end_time' => $this->endTime->format('Y-m-d H:i:s'),
        ];
    }

    public static function fromRequest(array $data): self
    {
        return new self(
            (int)$data['resource_id'],
            (int)$data['user_id'],
            Carbon::parse($data['start_time']),
            Carbon::parse($data['end_time'])
        );
    }
}