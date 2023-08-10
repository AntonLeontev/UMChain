<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
		if (! app()->isProduction()) {
			Model::shouldBeStrict();
		}

		if (app()->isProduction()) {
			Model::preventAccessingMissingAttributes();
		}

		if (request()->is('admin/*')) {
			app()->setLocale('ru');
		}
    }
}
