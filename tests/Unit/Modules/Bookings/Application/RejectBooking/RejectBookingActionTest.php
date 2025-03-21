<?php

declare(strict_types=1);

namespace Tests\Unit\Modules\Bookings\Application\RejectBooking;

use App\Modules\Bookings\Application\RejectBooking\RejectBookingAction;
use App\Modules\Bookings\Infrastructure\Interfaces\BookingRepositoryInterface;
use PHPUnit\Framework\TestCase;
use Mockery;

class RejectBookingActionTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function testHandleDestroysBooking(): void
    {
        // Arrange
        $bookingId = 1;
        $mockRepository = Mockery::mock(BookingRepositoryInterface::class);
        $action = new RejectBookingAction($mockRepository);

        // Expect
        $mockRepository->shouldReceive('destroy')
            ->once()
            ->with($bookingId);

        // Act
        $action->handle($bookingId);

        // Assert
        // PHPUnit автоматически проверит, был ли вызван метод destroy с правильными параметрами
    }
}