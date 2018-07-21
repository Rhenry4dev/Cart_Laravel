<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\DB;



class VerifyApiToken
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
        $token = $request->header('api_token');

        $apiToken = DB::table('api_tokens')->where('token', $token)->count();

        if ($apiToken == 0) {
            abort(401);
        }
        
        return $next($request);
    }
}
