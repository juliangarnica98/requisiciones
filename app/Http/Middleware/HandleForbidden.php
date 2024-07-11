<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class HandleForbidden
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        

        if ($response->getStatusCode() == 403) {
            // Borra la caché si es necesario
            Cache::flush();

            // Desloguea al usuario si está autenticado
            if (Auth::check()) {
                
                Auth::logout();
                //redirigir a la rura login
                return redirect('/login')->withCookie(Cookie::forget(config('session.cookie')));
            }
        }

        return $response;
    }
}
