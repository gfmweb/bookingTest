<?php

declare(strict_types=1);

namespace Tests\Unit\Modules\Resources\Application\CreateResource;

use App\Modules\Resources\Application\CreateResource\CreateResourceAction;
use App\Modules\Resources\Application\GetResorceTypeId\GetResourceTypeIdByName;
use App\Modules\Resources\Infrastructure\Interfaces\ResourceRepositoryInterface;
use App\Modules\Resources\Infrastructure\Interfaces\ResourceTypeRepositoryInterface;
use App\Modules\Resources\Infrastructure\Persistence\Models\Resource;
use PHPUnit\Framework\TestCase;
use Mockery;

class CreateResourceActionTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function testHandleCreatesResource(): void
    {
        // Arrange
        $name = 'Test Resource';
        $type = 'Test Type';
        $description = 'Test Description';
        $typeId = 1;

        $mockResourceTypeRepository = Mockery::mock(ResourceTypeRepositoryInterface::class);
        $mockResourceTypeRepository->shouldReceive('getTypeIdByName')
            ->once()
            ->with($type)
            ->andReturn($typeId);

        $getTypeIdByName = new GetResourceTypeIdByName($mockResourceTypeRepository);

        $mockRepository = Mockery::mock(ResourceRepositoryInterface::class);
        $mockResource = Mockery::mock(Resource::class);

        $action = new CreateResourceAction($mockRepository, $getTypeIdByName);

        // Expect
        $mockRepository->shouldReceive('create')
            ->once()
            ->with([
                'name' => $name,
                'resource_type_id' => $typeId,
                'description' => $description,
            ])
            ->andReturn($mockResource);

        // Act
        $result = $action->handle($name, $type, $description);

        // Assert
        $this->assertSame($mockResource, $result);
    }

    public function testHandleCreatesResourceWithoutDescription(): void
    {
        // Arrange
        $name = 'Test Resource';
        $type = 'Test Type';
        $typeId = 1;

        $mockResourceTypeRepository = Mockery::mock(ResourceTypeRepositoryInterface::class);
        $mockResourceTypeRepository->shouldReceive('getTypeIdByName')
            ->once()
            ->with($type)
            ->andReturn($typeId);

        $getTypeIdByName = new GetResourceTypeIdByName($mockResourceTypeRepository);

        $mockRepository = Mockery::mock(ResourceRepositoryInterface::class);
        $mockResource = Mockery::mock(Resource::class);

        $action = new CreateResourceAction($mockRepository, $getTypeIdByName);

        // Expect
        $mockRepository->shouldReceive('create')
            ->once()
            ->with([
                'name' => $name,
                'resource_type_id' => $typeId,
                'description' => null,
            ])
            ->andReturn($mockResource);

        // Act
        $result = $action->handle($name, $type);

        // Assert
        $this->assertSame($mockResource, $result);
    }
}