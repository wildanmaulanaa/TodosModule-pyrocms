<?php

namespace Anomaly\TodosModule\Http\Middleware;

use Closure;

class LoginMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->user()) {
            return redirect('/login');
        }

        return $next($request);
    }
}