<?php

namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
 
class BeforeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        
        if ($request->partner) {        
            $time_ = 24 * 60;
            $cookie = cookie('is_add', 1, $time_);
            $response = $next($request);
            return $response->withCookie($cookie);
        }

        return $next($request);
    }
}