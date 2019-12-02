<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TemplateLibrary\Template;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Activatable;
use App\Models\hasLanguage;

class AppUse extends Model
{
    use Activatable, hasLanguage, SoftDeletes;

    protected $guarded = ['id'];
    protected $table = "website_app_uses";

    public function templates()
    {
        return $this->belongsToMany(
            Template::class,
            "website_app_use_has_template",
            "app_use_id",
            "template_id"
        );
    }

    public function scopeDefaultOrder($query)
    {
        return $query->orderBy('title', 'asc');
    }
}
