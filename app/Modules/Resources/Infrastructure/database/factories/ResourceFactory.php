<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\database\factories;

use App\Modules\Resources\Infrastructure\Persistence\Models\Resource;
use App\Modules\Resources\Infrastructure\Persistence\Models\ResourceType;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends Factory<Resource>
 */
class ResourceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resource::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
            'description' => fake()->paragraph(),
            'resource_type_id' => ResourceType::query()->inRandomOrder()->first()->id,
        ];
    }
}
