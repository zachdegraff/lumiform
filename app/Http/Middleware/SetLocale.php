<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    public function handle($request, Closure $next, $guard = null)
    {
        $locale = $request->segment(1);
        if (in_array($locale, array_keys(config("app.locales")), true)) {
            app()->setLocale($locale);
        }
        return $next($request);
    }
}
