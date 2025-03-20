<?php

declare(strict_types=1);

namespace App\Modules\Resources\Tests\Integration;

use App\Modules\Resources\Infrastructure\Persistence\Models\Resource;
use App\Modules\Resources\Infrastructure\Persistence\Models\ResourceType;
use App\Modules\Resources\Infrastructure\Persistence\Repositories\ResourceRepository;
use App\Modules\Shared\Tests\TestCase;
use App\Modules\Users\Infrastructure\Persistence\Models\User;
use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;

class ResourceRepositoryTest extends TestCase
{
    private ResourceRepository $repository;

    public function test_get_bookings_by_resource_id_returns_bookings_with_users(): void
    {
        // Arrange
        $resourceType = ResourceType::factory()->create();
        $resource = Resource::factory()->create(['resource_type_id' => $resourceType->id]);
        $user = User::factory()->create();

        $bookings = Booking::factory()->count(3)->create([
            'resource_id' => $resource->id,
            'user_id' => $user->id
        ]);

        // Act
        $result = $this->repository->getBookingsByResourceId($resource->id);

        // Assert
        $this->assertCount(3, $result);
        $this->assertEquals($bookings->pluck('id')->sort()->values(), $result->pluck('id')->sort()->values());
        $this->assertTrue($result->first()->relationLoaded('user'));
    }

    public function test_list_returns_resources_with_types(): void
    {
        // Arrange
        $resourceType = ResourceType::factory()->create();
        $resources = Resource::factory()->count(3)->create(['resource_type_id' => $resourceType->id]);

        // Act
        $result = $this->repository->list();

        // Assert
        $this->assertCount(3, $result);
        $this->assertEquals($resources->pluck('id')->sort()->values(), $result->pluck('id')->sort()->values());
        $this->assertTrue($result->first()->relationLoaded('resourceType'));
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->repository = new ResourceRepository(new Resource());
    }
}