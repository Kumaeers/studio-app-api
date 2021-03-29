<?php

namespace App\Http\Middleware;

use Closure;

class AppendAcceptJsonToRequestHeader
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
        $request->headers->set('Accept', 'application/json');
        $response = $next($request);
        return $response;
    }
}
