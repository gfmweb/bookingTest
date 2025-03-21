<?php

declare(strict_types=1);

namespace Tests\Unit\Modules\Resources\Application\ResourcesList;

use App\Modules\Resources\Application\ResourcesList\GetResourcesListAction;
use App\Modules\Resources\Infrastructure\Interfaces\ResourceRepositoryInterface;
use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;
use Mockery;

class GetResourcesListActionTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function testHandleReturnsCollectionOfResources(): void
    {
        // Arrange
        $expectedResources = new Collection([
            ['id' => 1, 'name' => 'Resource 1', 'type' => 'Type 1'],
            ['id' => 2, 'name' => 'Resource 2', 'type' => 'Type 2'],
        ]);

        $mockRepository = Mockery::mock(ResourceRepositoryInterface::class);
        $mockRepository->shouldReceive('list')
            ->once()
            ->withNoArgs()
            ->andReturn($expectedResources);

        $action = new GetResourcesListAction($mockRepository);

        // Act
        $result = $action->handle();

        // Assert
        $this->assertInstanceOf(Collection::class, $result);
        $this->assertEquals($expectedResources, $result);
    }

    public function testHandleReturnsEmptyCollectionWhenNoResourcesExist(): void
    {
        // Arrange
        $expectedResources = new Collection();

        $mockRepository = Mockery::mock(ResourceRepositoryInterface::class);
        $mockRepository->shouldReceive('list')
            ->once()
            ->withNoArgs()
            ->andReturn($expectedResources);

        $action = new GetResourcesListAction($mockRepository);

        // Act
        $result = $action->handle();

        // Assert
        $this->assertInstanceOf(Collection::class, $result);
        $this->assertTrue($result->isEmpty());
    }
}