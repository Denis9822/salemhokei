<?php

namespace App\Providers;

use App\Http\ViewComposers\MainAppealsComposer;
use App\Http\ViewComposers\StatComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
//        View::composer("app.pages.home.components.stat", StatComposer::class);
//        View::composer("app.pages.home.components.appeals", MainAppealsComposer::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
