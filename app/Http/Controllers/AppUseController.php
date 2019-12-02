<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AppUse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AppUseController extends Controller
{
    public function index(Request $request)
    {
        $appUses = AppUse::active()->inActiveLanguage()->defaultOrder()->get();
        return View::make('/pages/resources/app_uses/_index', ['appUses' => $appUses]);
    }

    public function show($appUseSlug)
    {
        $appUse = AppUse::where('slug', $appUseSlug)->firstOrFail();
        return View::make('/pages/resources/app_uses/app_use', ['appUse' => $appUse]);
    }
}
