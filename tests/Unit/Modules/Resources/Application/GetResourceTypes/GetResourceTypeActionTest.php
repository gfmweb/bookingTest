<?php

declare(strict_types=1);

namespace Tests\Unit\Modules\Resources\Application\GetResourceTypes;

use App\Modules\Resources\Application\GetResourceTypes\GetResourceTypeAction;
use App\Modules\Resources\Infrastructure\Interfaces\ResourceTypeRepositoryInterface;
use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;
use Mockery;

class GetResourceTypeActionTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function testHandleReturnsCollectionOfResourceTypes(): void
    {
        // Arrange
        $expectedTypes = new Collection([
            ['id' => 1, 'name' => 'Room'],
            ['id' => 2, 'name' => 'Equipment'],
        ]);

        $mockRepository = Mockery::mock(ResourceTypeRepositoryInterface::class);
        $mockRepository->shouldReceive('list')
            ->once()
            ->withNoArgs()
            ->andReturn($expectedTypes);

        $action = new GetResourceTypeAction($mockRepository);

        // Act
        $result = $action->handle();

        // Assert
        $this->assertInstanceOf(Collection::class, $result);
        $this->assertEquals($expectedTypes, $result);
    }

    public function testHandleReturnsEmptyCollectionWhenNoTypesExist(): void
    {
        // Arrange
        $expectedTypes = new Collection();

        $mockRepository = Mockery::mock(ResourceTypeRepositoryInterface::class);
        $mockRepository->shouldReceive('list')
            ->once()
            ->withNoArgs()
            ->andReturn($expectedTypes);

        $action = new GetResourceTypeAction($mockRepository);

        // Act
        $result = $action->handle();

        // Assert
        $this->assertInstanceOf(Collection::class, $result);
        $this->assertTrue($result->isEmpty());
    }
}