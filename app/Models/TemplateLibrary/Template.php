<?php

namespace App\Models\TemplateLibrary;

use Illuminate\Database\Eloquent\Model;
use App\Models\TemplateLibrary\Category;
use App\Models\Activatable;
use App\Models\hasLanguage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Template extends Model
{
    use Activatable, hasLanguage, SoftDeletes;

    protected $guarded = ['id'];
    protected $table = "template_library_templates";

    public function categories()
    {
        return $this->belongsToMany(
            Category::class,
            "template_library_template_has_category",
            "template_id",
            "category_id"
        );
    }

    public function scopeDefaultOrder($query)
    {
        return $query->orderBy('title', 'asc');
    }

    public function scopeOrdered($query)
    {
        return $this->scopeDefaultOrder($query->orderBy('order', 'desc'));
    }
}
