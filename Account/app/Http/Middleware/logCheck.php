<?php

namespace App\Http\Middleware;

use Closure;

class logCheck
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
        if (empty (\Session::get('logData'))) {
            return redirect ('/create');
        }
        return $next($request);
    }
}
