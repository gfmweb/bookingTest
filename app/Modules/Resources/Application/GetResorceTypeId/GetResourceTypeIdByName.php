<?php

namespace App\Modules\Resources\Application\GetResorceTypeId;

use App\Modules\Resources\Infrastructure\Interfaces\ResourceTypeRepositoryInterface;

readonly class GetResourceTypeIdByName
{
    public function __construct(
        private ResourceTypeRepositoryInterface $repository
    ) {
    }

    public function handle(string $name): int
    {
        return $this->repository->getTypeIdByName($name);
    }
}