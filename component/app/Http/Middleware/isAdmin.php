<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth() -> check() && $request -> user() -> level_User == 1 || $request -> user() -> level_User == 2 || $request -> user() -> level_User == 3 || $request -> user() -> level_User == 4) {
            return $next($request);
        }
        return redirect() -> guest('/');
    }
}
