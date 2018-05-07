<?php

namespace App\Http\Middleware;

use Closure;

class usershoppingmiddleware
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
        echo "hahahahahah";
        return $next($request);
    }
}
