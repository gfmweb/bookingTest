<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Log;
use Mockery;
use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;


class BookingObserverTest extends TestCase
{
    

    public function test_created_logs_booking_creation(): void
    {
        // Arrange
        Log::shouldReceive('info')
            ->once()
            ->with('Booking created', Mockery::type('array'));

        $booking = Booking::factory()->make();

        // Act
        // ... rest of the test
    }

    
}