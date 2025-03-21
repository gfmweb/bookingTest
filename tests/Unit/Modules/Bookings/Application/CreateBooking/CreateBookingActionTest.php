<?php

namespace Tests\Unit\Modules\Bookings\Application\CreateBooking;

use App\Modules\Bookings\Application\CreateBooking\CreateBookingAction;
use App\Modules\Bookings\Infrastructure\Interfaces\BookingRepositoryInterface;
use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;
use App\Modules\Bookings\Infrastructure\ValueObjects\CreateBookingVO;
use Illuminate\Support\Carbon;
use PHPUnit\Framework\TestCase;
use Mockery;

class CreateBookingActionTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function testHandleCreatesBooking()
    {
        // Arrange
        $mockRepository = Mockery::mock(BookingRepositoryInterface::class);
        $action = new CreateBookingAction($mockRepository);

        $bookingVO = new CreateBookingVO(
             2,
             1,
             Carbon::createFromDate('2025-12-12 10:00:00'),
            Carbon::createFromDate('2025-12-13 10:00:00'),
        );

        $expectedBooking = new Booking([
            'user_id' => 1,
            'resource_id' => 2,
            Carbon::createFromDate('2025-12-12 10:00:00'),
            Carbon::createFromDate('2025-12-13 10:00:00'),
        ]);

        // Expect
        $mockRepository->shouldReceive('create')
            ->once()
            ->with($bookingVO->asArray())
            ->andReturn($expectedBooking);

        // Act
        $result = $action->handle($bookingVO);

        // Assert
        $this->assertInstanceOf(Booking::class, $result);
        $this->assertEquals($expectedBooking, $result);
    }
}