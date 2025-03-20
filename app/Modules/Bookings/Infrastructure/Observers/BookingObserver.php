<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Infrastructure\Observers;

use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;
use Illuminate\Support\Facades\Log;

class BookingObserver
{
    public function creating(Booking $booking): void
    {
        $this->checkResourceAvailability($booking);
    }

    /**
     * Проверка доступности ресурса на указанное время
     */
    private function checkResourceAvailability(Booking $booking): void
    {
        $existingBooking = Booking::query()
            ->where('resource_id', $booking->resource_id)
            ->where(function ($query) use ($booking) {
                $query->where(function ($q) use ($booking) {
                    $q->where('start_time', '>=', $booking->start_time)
                        ->where('start_time', '<', $booking->end_time);
                })->orWhere(function ($q) use ($booking) {
                    $q->where('end_time', '>', $booking->start_time)
                        ->where('end_time', '<=', $booking->end_time);
                })->orWhere(function ($q) use ($booking) {
                    $q->where('start_time', '<=', $booking->start_time)
                        ->where('end_time', '>=', $booking->end_time);
                });
            })
            ->when($booking->exists, function ($query) use ($booking) {
                return $query->where('id', '!=', $booking->id);
            })
            ->exists();

        if ($existingBooking) {
            throw new \RuntimeException('Ресурс занят. Пожалуйста, выберите другое время');
        }
    }

    public function created(Booking $booking): void
    {
        Log::info('Booking created', [
            'booking_id' => $booking->id,
            'resource_id' => $booking->resource_id,
            'user_id' => $booking->user_id,
            'start_time' => $booking->start_time,
            'end_time' => $booking->end_time
        ]);
    }

    /**
     * Handle the Booking "deleted" event.
     */
    public function deleted(Booking $booking): void
    {
        Log::info('Booking deleted', [
            'booking_id' => $booking->id,
            'resource_id' => $booking->resource_id,
            'user_id' => $booking->user_id
        ]);
    }
}