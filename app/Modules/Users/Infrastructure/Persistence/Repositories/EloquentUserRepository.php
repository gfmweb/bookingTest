<?php

declare(strict_types=1);

namespace App\Modules\Users\Infrastructure\Persistence\Repositories;

use App\Modules\Users\Infrastructure\Persistence\Models\User;
use App\Modules\Users\Infrastructure\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Collection;


readonly class EloquentUserRepository implements UserRepositoryInterface
{
    public function __construct(
        private User $model
    ) {
    }

    public function list(): Collection
    {
        return $this->model->all();
    }

    public function get(int $id): ?User
    {
        return $this->model->find($id);
    }

    public function store(array $data): User
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): User
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function delete(int $id): void
    {
        $this->model->destroy($id);
    }
}
