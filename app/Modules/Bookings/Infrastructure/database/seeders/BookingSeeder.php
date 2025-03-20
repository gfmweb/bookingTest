<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Infrastructure\database\seeders;

use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maxAttempts = 10;
        $count = 0;

        while ($count < 100 && $maxAttempts > 0) {
            try {
                Booking::factory()->create();
                $count++;
            } catch (\RuntimeException $e) {
                $maxAttempts--;
            }
        }
    }
}
