<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('urlTo', function ($routeName) {
            return "<?php echo route(app()->getLocale().'.'.$routeName) ?>";
        });

        Blade::directive('urlToImage', function ($imageFileName) {
            return "<?php echo 'https://lumiform-website-images.s3.eu-central-1.amazonaws.com/'.$imageFileName ?>";
        });
    }
}
