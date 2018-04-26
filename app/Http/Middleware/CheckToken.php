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

            $client = new Client;
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'order/get', [
                'query' => ['orderCode' => $id]
            ]);
            $responseData = json_decode($response->getBody()->getContents());

            $request->attributes->add(['user' => $user]);
        } else{
            return redirect('/');
        }

        return $next($request);
    }
}
