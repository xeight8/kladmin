<?php

namespace Xeight8\Kladmin\Http\Middleware\Auth;

use Closure;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class GuestMiddleware
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
        if (Sentinel::check()) {
            return back();
        }

        return $next($request);
    }
}
