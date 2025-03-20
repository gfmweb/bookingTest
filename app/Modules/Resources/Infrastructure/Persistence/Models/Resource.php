<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\Persistence\Models;

use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;
use App\Modules\Resources\Infrastructure\database\factories\ResourceFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'resource_type_id'
    ];

    public function resourceType(): BelongsTo
    {
        return $this->belongsTo(ResourceType::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    protected function factory(): ResourceFactory
    {
        return ResourceFactory::new();
    }
}
