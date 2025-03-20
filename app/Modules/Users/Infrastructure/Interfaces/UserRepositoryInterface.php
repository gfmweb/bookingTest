<?php

declare(strict_types=1);

namespace App\Modules\Users\Infrastructure\Interfaces;

use App\Modules\Users\Infrastructure\Persistence\Models\User;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function list(): Collection;

    public function get(int $id): ?User;

    public function store(array $data): User;

    public function update(int $id, array $data): User;

    public function delete(int $id): void;
}