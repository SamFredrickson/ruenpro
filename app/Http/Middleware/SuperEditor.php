<?php

namespace App\Http\Middleware;

use Closure;

class SuperEditor
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
        if(auth()->user()->role->id == 1  || auth()->user()->role->id == 2)
            return redirect('/login');

        return $next($request);
    }
}
