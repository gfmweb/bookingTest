<?php

declare(strict_types=1);

namespace App\Modules\Resources\Application\GetResourceTypes;

use App\Modules\Resources\Infrastructure\Interfaces\ResourceTypeRepositoryInterface;
use Illuminate\Support\Collection;

readonly class GetResourceTypeAction
{
    public function __construct(
        private ResourceTypeRepositoryInterface $repository
    ) {
    }

    public function handle(): Collection
    {
        return $this->repository->list();
    }
}