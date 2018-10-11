<?php

namespace Learning\Http\Middleware;

use Closure;
use Auth;

class Autorizador
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
        // if(!$request->is('login') && !$request->is('logout') && Auth::guest())
        //     return redirect('/login');
        
        return $next($request);
    }
}
