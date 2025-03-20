<?php

declare(strict_types=1);

namespace App\Modules\Resources\Tests\Unit;

use App\Modules\Resources\Application\GetBookingHistory\GetBookingHistoryAction;
use App\Modules\Resources\Infrastructure\Interfaces\ResourceRepositoryInterface;
use App\Modules\Shared\Tests\TestCase;
use Illuminate\Support\Collection;
use Mockery;

class GetBookingHistoryActionTest extends TestCase
{
    private ResourceRepositoryInterface $repository;
    private GetBookingHistoryAction $action;

    public function test_handle_returns_booking_history(): void
    {
        // Arrange
        $resourceId = 1;
        $expectedBookings = new Collection([
            ['id' => 1, 'resource_id' => 1],
            ['id' => 2, 'resource_id' => 1],
        ]);

        $this->repository
            ->shouldReceive('getBookingsByResourceId')
            ->with($resourceId)
            ->once()
            ->andReturn($expectedBookings);

        // Act
        $result = $this->action->handle($resourceId);

        // Assert
        $this->assertEquals($expectedBookings, $result);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->repository = Mockery::mock(ResourceRepositoryInterface::class);
        $this->action = new GetBookingHistoryAction($this->repository);
    }
}