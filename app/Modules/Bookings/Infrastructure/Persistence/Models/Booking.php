<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Infrastructure\Persistence\Models;

use App\Modules\Bookings\Infrastructure\database\factories\BookingFactory;
use App\Modules\Resources\Infrastructure\Persistence\Models\Resource;
use App\Modules\Users\Infrastructure\Persistence\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['resource_id', 'user_id', 'start_time', 'end_time'];

    public function resource(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function factory(): BookingFactory
    {
        return BookingFactory::new();
    }


}
