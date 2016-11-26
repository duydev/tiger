<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MenuItem;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menus = MenuItem::getTree();
        view()->share('menus', $menus);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            // Jeffrey Way's generators
            $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
            // Backpack generators
            $this->app->register('Backpack\Generators\GeneratorsServiceProvider');
        }
    }
}
