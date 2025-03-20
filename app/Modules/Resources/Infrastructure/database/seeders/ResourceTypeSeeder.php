<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\database\seeders;

use Illuminate\Database\Seeder;
use App\Modules\Resources\Infrastructure\Persistence\Models\ResourceType;

class ResourceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $examples = ['Велосипед','Самокат','Квартира','Машина','PowerBank'];
        $insertData = [];
        foreach ($examples as $example) {
            $insertData[] = ['name' => $example];
        }
        ResourceType::insert($insertData);
    }
}
