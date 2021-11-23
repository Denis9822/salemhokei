<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $lang = ["ru", "kk"];
        $currentPath = Request::path();
        if (in_array(Request::segment(1), $lang)) {
            $locale = Request::segment(1);
            $uri = substr($currentPath, 2);
        } else {
            $locale = "ru";
            $uri = $currentPath;
        }


        App::setLocale($locale);
        View::share("uri", $uri);
        View::share("lang", $locale);
        View::share("title", config("app.name"));
        View::share("meta", "");

        Schema::defaultStringLength(191);
    }
}
