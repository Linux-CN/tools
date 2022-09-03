<?php

namespace App\Casts;

use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class CreatedAt implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        if (Carbon::now() > Carbon::parse($value)->addDays(15)) {
            return Carbon::parse($value);
        }
        return Carbon::parse($value)->diffForHumans();
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value;
    }
}
