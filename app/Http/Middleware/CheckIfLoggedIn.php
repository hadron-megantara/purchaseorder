<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckIfLoggedIn
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
        if (!$request->session()->has('user')) {
            $checkout = ["checkout" => true, "message" => "Anda Harus Login Untuk Melakukan Pembayaran"];
            Session::put('checkout', $checkout);

            return redirect('login');
        }

        return $next($request);
    }
}
