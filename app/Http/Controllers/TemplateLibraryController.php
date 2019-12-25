<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TemplateLibrary\Category;
use App\Models\TemplateLibrary\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TemplateLibraryController extends Controller
{
    public function featured()
    {
        return View::make('/pages/template_library/_featured', [
            'categories' => Category::topLevel()->active()->inActiveLanguage()->ordered()->get(),
        ]);
    }

    public function index(Request $request, $categorySlug)
    {
        $category = null;
        if ($categorySlug) {
            $category = Category::where('slug', $categorySlug)->firstOrFail();
        }

        $search = null;
        if ($request->query('search')) {
            $search = $request->query('search');
        }

        $categories = Category::topLevel()->active()->inActiveLanguage()->ordered();
        $templates = Template::active()->inActiveLanguage()->defaultOrder();
        
        if ($category) {
            $templates->whereHas('categories', function ($query) use ($category) {
                $query->whereIn('id', $category->allSubCategoriesAndSelf()->pluck("id"));
            });
        }

        if ($search) {
            $templates->where('title', 'like', '%'.$search.'%');
        }

        return View::make('/pages/template_library/index', [
            'search' => $search,
            'category' => $category,
            'categories' => $categories->get(),
            'templates' => $templates->simplePaginate(3),
        ]);
    }

    public function show($templateSlug, $templateId)
    {
        $categories = Category::topLevel()->active()->inActiveLanguage()->ordered();
        $template = Template::findOrFail($templateId);
        $template->form = json_decode($template->form);
        //dd($template->form);
        return View::make('/pages/template_library/template', [
            'template' => $template,
            'categories' => $categories,
        ]);
    }
}
