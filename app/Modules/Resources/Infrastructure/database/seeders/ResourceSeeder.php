<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\database\seeders;

use App\Modules\Resources\Infrastructure\Persistence\Models\Resource;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resource::factory()->times(10)->create();
    }
}
