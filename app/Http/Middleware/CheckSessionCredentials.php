<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CheckSessionCredentials
{
    public function handle($request, Closure $next)
    {
        if (!session("credentials")) {
            $lang = App::getLocale();
            return redirect("/$lang/login");
        }
        return $next($request);
    }
}
