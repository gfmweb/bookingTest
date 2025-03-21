<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\Persistence\Models;

use App\Modules\Resources\Infrastructure\database\factories\ResourceTypeFactory;
use App\Modules\Resources\Infrastructure\Persistence\Casts\HumanReadableDateCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ResourceType extends Model
{
    use HasFactory;

    protected $fillable = ['id','name'];
    protected $casts = [
        'created_at' => HumanReadableDateCast::class,
        'updated_at' => HumanReadableDateCast::class,
    ];

    public function resources(): HasMany
    {
        return $this->hasMany(Resource::class);
    }

    protected function factory(): ResourceTypeFactory
    {
        return ResourceTypeFactory::new();
    }
}
