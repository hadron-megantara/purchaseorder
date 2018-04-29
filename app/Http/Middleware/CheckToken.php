<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
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
        if (isset($_COOKIE[env('LOGIN_COOKIE', 'phpsess')])) {
            $token = $_COOKIE[env('LOGIN_COOKIE', 'phpsess')];

            $request->attributes->add(['token' => $token]);
        } else{
            return redirect('/');
        }

        return $next($request);
    }
}
