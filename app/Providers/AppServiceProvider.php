<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = Setting::all();
        foreach ( $settings as $setting ) {
            config( [ 'settings.'.$setting->key => $setting->value ] );
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
