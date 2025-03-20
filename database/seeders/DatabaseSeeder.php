<?php

namespace Database\Seeders;

use App\Modules\Bookings\Infrastructure\database\seeders\BookingSeeder;
use App\Modules\Resources\Infrastructure\database\seeders\ResourceSeeder;
use App\Modules\Resources\Infrastructure\database\seeders\ResourceTypeSeeder;
use App\Modules\Users\Infrastructure\database\seeders\UsersSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(
            [
                UsersSeeder::class,
                ResourceTypeSeeder::class,
                ResourceSeeder::class,
                BookingSeeder::class,
            ]
        );
    }
}