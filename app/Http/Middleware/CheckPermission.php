<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

/**
 * --------------------------------------------------------------------------
 *  CheckPermission
 * --------------------------------------------------------------------------
 *
 *  Проверка прав доступа
 *
 */
class CheckPermission
{
    /**
     * Перехват входящего запроса.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        if (!Auth::user()) {
            return redirect("/");
        }

        if (!Auth::user()->can($permission)) {
            if($permission == "access.view"){
                return redirect("/");
            }
            return redirect("/admin/profile")->with("status", "У вас недостаточно прав для доступа к выбранному разделу");
        }

        return $next($request);
    }
}
