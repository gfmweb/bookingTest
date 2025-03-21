<?php

namespace App\Modules\Resources\Infrastructure\Persistence\Casts;

use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class HumanReadableDateCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return $value ? Carbon::parse($value)->format('d.m.Y H:i:s') : null;
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value;
    }
}