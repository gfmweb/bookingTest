<?php

declare(strict_types=1);

namespace App\Modules\Resources\Application\ResourcesList;

use App\Modules\Resources\Infrastructure\Interfaces\ResourceRepositoryInterface;
use Illuminate\Support\Collection;

readonly class GetResourcesListAction
{
    public function __construct(
        private ResourceRepositoryInterface $repository
    ) {
    }

    public function handle(): Collection
    {
        return $this->repository->list();
    }
}