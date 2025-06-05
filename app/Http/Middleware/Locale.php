<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $available_languages = ["es"];
        $locale = config('app.locale');
        
        if( isset($request->route()->parameters()['locale'])){
            if(in_array($request->route()->parameters()['locale'], $available_languages) ){
                $locale = $request->route()->parameters()['locale'];
            }else{
                abort(404);            
            }
        }
        
        App::setLocale($locale);
        return $next($request);
    }
}
