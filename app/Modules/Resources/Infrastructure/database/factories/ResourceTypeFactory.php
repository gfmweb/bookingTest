<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\database\factories;

use App\Modules\Resources\Infrastructure\Persistence\Models\ResourceType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResourceTypeFactory extends Factory
{
    protected $model = ResourceType::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}