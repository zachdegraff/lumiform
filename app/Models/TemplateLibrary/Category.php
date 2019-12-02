<?php

namespace App\Models\TemplateLibrary;

use App\Models\Activatable;
use App\Models\hasLanguage;
use Illuminate\Database\Eloquent\Model;
use App\Models\TemplateLibrary\Template;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use Activatable, hasLanguage, SoftDeletes;

    protected $guarded = ['id'];
    protected $table = "template_library_categories";

    public function templates()
    {
        return $this->belongsToMany(
            Template::class,
            "template_library_template_has_category",
            "category_id",
            "template_id"
        );
    }

    public function featuredTemplates()
    {
        return $this->templates()
            ->active()
            ->where('is_featured', true)
            ->ordered();
    }

    public function parentCategory()
    {
        return $this->belongsTo(static::class, "parent_id");
    }

    public function subCategories()
    {
        return $this->hasMany(static::class, "parent_id");
    }

    public function scopeDefaultOrder($query)
    {
        return $query->orderBy('title', 'asc');
    }

    public function scopeOrdered($query)
    {
        return $this->scopeDefaultOrder($query->orderBy('order', 'desc'));
    }

    public function scopeTopLevel($query)
    {
        return $this->whereNull('parent_id');
    }

    public function allSubCategoriesAndSelf()
    {
        return static::query()->where('slug', 'LIKE', $this->slug."%");
    }
}
