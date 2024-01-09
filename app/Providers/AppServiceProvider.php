<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;

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
        Builder::macro('hasId', function ($id) {
            return $this->where('id', $id)->exists();
        });

        Builder::macro('notHasId', function ($id) {
            return !$this->hasId($id);
        });
    }
}
