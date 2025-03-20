<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\Interfaces;

use Illuminate\Support\Collection;

interface ResourceTypeRepositoryInterface
{
    public function list(): Collection;

    public function getTypeIdByName(string $name): ?int;
}