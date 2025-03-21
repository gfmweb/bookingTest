<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\Persistence\Models;

use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;
use App\Modules\Resources\Infrastructure\database\factories\ResourceFactory;
use App\Modules\Resources\Infrastructure\Persistence\Casts\HumanReadableDateCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'resource_type_id'
    ];
    protected $casts = [
        'created_at' => HumanReadableDateCast::class,
        'updated_at' => HumanReadableDateCast::class,
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
