<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

trait Activatable
{
    public function scopeActive(Builder $query)
    {
        return $query->where('is_active', true);
    }

    public function scopeInActive(Builder $query)
    {
        return $query->where('is_active', false);
    }
}
