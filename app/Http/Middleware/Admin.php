<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Route;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Route::currentRouteName() == "adminLogin"){
            return $next($request);
        }
        if (!session()->get('admin_id')) {
            return redirect('/login');
        }
        return $next($request);
    }
}
