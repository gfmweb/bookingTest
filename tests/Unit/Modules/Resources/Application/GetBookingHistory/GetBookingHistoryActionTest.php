<?php

declare(strict_types=1);

namespace Tests\Unit\Modules\Resources\Application\GetBookingHistory;

use App\Modules\Resources\Application\GetBookingHistory\GetBookingHistoryAction;
use App\Modules\Resources\Infrastructure\Interfaces\ResourceRepositoryInterface;
use PHPUnit\Framework\TestCase;
use Mockery;

class GetBookingHistoryActionTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function testHandleReturnsBookingHistory(): void
    {
        // Arrange
        $resourceId = 1;
        $expectedBookings = [
            ['id' => 1, 'resource_id' => $resourceId, 'start_time' => '2023-03-25 10:00:00', 'end_time' => '2023-03-25 11:00:00'],
            ['id' => 2, 'resource_id' => $resourceId, 'start_time' => '2023-03-26 14:00:00', 'end_time' => '2023-03-26 15:00:00'],
        ];

        $mockRepository = Mockery::mock(ResourceRepositoryInterface::class);
        $mockRepository->shouldReceive('getBookingsByResourceId')
            ->once()
            ->with($resourceId)
            ->andReturn($expectedBookings);

        $action = new GetBookingHistoryAction($mockRepository);

        // Act
        $result = $action->handle($resourceId);

        // Assert
        $this->assertSame($expectedBookings, $result);
    }
}