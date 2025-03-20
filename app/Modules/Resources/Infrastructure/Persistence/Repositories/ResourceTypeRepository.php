<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\Persistence\Repositories;

use App\Modules\Resources\Infrastructure\Interfaces\ResourceTypeRepositoryInterface;
use App\Modules\Resources\Infrastructure\Persistence\Models\ResourceType;
use Illuminate\Support\Collection;

readonly class ResourceTypeRepository implements ResourceTypeRepositoryInterface
{
    public function __construct(
        private ResourceType $model
    ) {
    }

    public function list(): Collection
    {
        return $this->model->orderBy('id')->get();
    }

    public function getTypeIdByName(string $name): ?int
    {
        return $this->model->where('name', $name)->first()->id;
    }
}