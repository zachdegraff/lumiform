<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

trait hasLanguage
{
    public function scopeInActiveLanguage(Builder $query)
    {
        return $query->where('language', app()->getLocale());
    }
}
