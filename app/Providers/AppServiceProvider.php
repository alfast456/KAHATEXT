<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use livewire\Livewire;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // URL::forceRootUrl(config('app.url'));
        // Customize Livewire asset and AJAX endpoints if your app uses a subfolder
        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/KAHATEXT/public/livewire/livewire.js', $handle);
        });

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/KAHATEXT/public/livewire/update', $handle);
        });
    }
}
