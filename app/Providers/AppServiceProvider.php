<?php

namespace App\Providers;

use App\Models\Complex;
use App\Models\Flat;
use App\Models\Post;

use App\Observers\ComplexObserver;
use App\Observers\FlatObserver;
use App\Observers\PostObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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

        Paginator::useBootstrap();
        Post::observe(PostObserver::class);
        Flat::observe(FlatObserver::class);
        Complex::observe(ComplexObserver::class);

    }
}
