<?php

declare(strict_types=1);

namespace App\Modules\Resources\Application\CreateResource;

use App\Modules\Resources\Application\GetResorceTypeId\GetResourceTypeIdByName;
use App\Modules\Resources\Infrastructure\Interfaces\ResourceRepositoryInterface;
use App\Modules\Resources\Infrastructure\Persistence\Models\Resource;

readonly class CreateResourceAction
{
    public function __construct(
        private ResourceRepositoryInterface $repository,
        private GetResourceTypeIdByName $getTypeIdByName
    ) {
    }

    public function handle(string $name, string $type, ?string $description = null ): Resource
    {
        $data = [
            'name' => $name,
            'resource_type_id' => $this->getTypeIdByName->handle($type),
            'description' => $description,
        ];
        return $this->repository->create($data);
    }
}