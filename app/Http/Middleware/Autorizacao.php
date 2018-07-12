<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Autorizacao
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
        if(!$request->is('login') && Auth::guest() ) 
        {
        return redirect('/login_user');
        }
        return $next($request);
    }
}
