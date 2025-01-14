<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Chirp;
use App\Policies\ChirpPolicy;

class AppServiceProvider extends ServiceProvider
{

    protected $policies = [
        Chirp::class => ChirpPolicy::class,
    ];
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
        //
    }
}
