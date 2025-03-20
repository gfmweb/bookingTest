<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Infrastructure\database\factories;

use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;
use App\Modules\Resources\Infrastructure\Persistence\Models\Resource;
use App\Modules\Users\Infrastructure\Persistence\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        $startTime = Carbon::now()->addDays(rand(0, 30))->addHours(rand(0, 23));
        $endTime = (clone $startTime)->addHours(rand(1, 5));

        return [
            'resource_id' => Resource::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'start_time' => $startTime,
            'end_time' => $endTime,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}