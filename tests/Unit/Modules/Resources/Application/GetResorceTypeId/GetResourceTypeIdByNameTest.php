<?php

declare(strict_types=1);

namespace Tests\Unit\Modules\Resources\Application\GetResorceTypeId;

use App\Modules\Resources\Application\GetResorceTypeId\GetResourceTypeIdByName;
use App\Modules\Resources\Infrastructure\Interfaces\ResourceTypeRepositoryInterface;
use PHPUnit\Framework\TestCase;
use Mockery;

class GetResourceTypeIdByNameTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function testHandleReturnsCorrectTypeId(): void
    {
        // Arrange
        $typeName = 'PowerBank';
        $expectedTypeId = 1;

        $mockRepository = Mockery::mock(ResourceTypeRepositoryInterface::class);
        $mockRepository->shouldReceive('getTypeIdByName')
            ->once()
            ->with($typeName)
            ->andReturn($expectedTypeId);

        $action = new GetResourceTypeIdByName($mockRepository);

        // Act
        $result = $action->handle($typeName);

        // Assert
        $this->assertSame($expectedTypeId, $result);
    }

    public function testHandleThrowsExceptionWhenTypeNotFound(): void
    {
        // Arrange
        $typeName = 'NonExistentType';

        $mockRepository = Mockery::mock(ResourceTypeRepositoryInterface::class);
        $mockRepository->shouldReceive('getTypeIdByName')
            ->once()
            ->with($typeName)
            ->andThrow(new \Exception('Resource type not found'));

        $action = new GetResourceTypeIdByName($mockRepository);

        // Assert & Act
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Resource type not found');

        $action->handle($typeName);
    }
}