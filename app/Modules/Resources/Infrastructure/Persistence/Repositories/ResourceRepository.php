<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\Persistence\Repositories;

use App\Modules\Resources\Infrastructure\Interfaces\ResourceRepositoryInterface;
use App\Modules\Resources\Infrastructure\Persistence\Models\Resource;
use \Illuminate\Database\Eloquent\Collection;

readonly class ResourceRepository implements ResourceRepositoryInterface
{
    public function __construct(
        private Resource $model
    ) {
    }

    public function list(): Collection
    {
        return $this->model->with('resourceType')->get();
    }

    public function create(array $data): Resource
    {
        return $this->model->create($data)->load('resourceType');
    }

    public function getBookingsByResourceId(int $id, int $perPage = 15, int $page = 1): array
    {
        $resource = $this->model
            ->where('id', $id)
            ->with([
                'resourceType',
                'bookings' => function ($query) use ($perPage, $page) {
                    $query->orderBy('start_time', 'desc')
                        ->with('user:id,name,email')
                        ->skip(($page - 1) * $perPage)
                        ->take($perPage);
                }
            ])
            ->first();

        if (!$resource) {
            return [
                'resource' => null,
                'bookings' => collect(),
            ];
        }

        return [
            'resource' => [
                'id' => $resource->id,
                'name' => $resource->name,
                'resource_type' => [
                    'id' => $resource->resourceType->id,
                    'name' => $resource->resourceType->name,
                ],
            ],
            'bookings' => $resource->bookings,
        ];
    }
}
