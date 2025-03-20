<?php

declare(strict_types=1);

namespace App\Modules\Users\Infrastructure\database\seeders;

use App\Modules\Users\Infrastructure\Persistence\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
    }
}
