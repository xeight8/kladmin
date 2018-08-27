<?php

namespace Xeight8\Kladmin\Http\Middleware\Auth;

use Closure;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class AuthenticatedMiddleware
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
        if (!Sentinel::check()) {
            return redirect()->route('kladmin.auth.login')->with('messages', ['Please log in to access this page.']);
        }

        return $next($request);
    }
}
