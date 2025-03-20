<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use App\Modules\Resources\Infrastructure\Persistence\Models\Resource;

interface ResourceRepositoryInterface
{
    public function list(): Collection;

    public function create(array $data): Resource;

    public function getBookingsByResourceId(int $id, int $perPage = 15, int $page = 1): array;
}