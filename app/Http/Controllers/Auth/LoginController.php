<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;

class LoginController extends Controller
{
    public function index(Request $request){
        $data = array();

        if(Session::has('checkout')){
            $data['checkout'] = session('checkout');
        }

        return view('auth.login', $data);
    }

    public function login(Request $request){
        $client = new Client;

        if($request->has('email') && $request->has('password')){
            $response = $client->request('POST', env('API_URL', 'http://192.168.1.101:212/api/v1/').'login', [
                    'query' => ['owner' => env('OWNER_ID', 1), 'email' => $request->email, 'password' => $request->password]
                ]);
            $responseData = json_decode($response->getBody()->getContents());

            if($responseData->isError == false){
                $loginData = $responseData->isResponse;
                $userData = ["id" => $loginData->data->id, "email" => $loginData->data->email, "fullname" => $loginData->data->name, "phone" => $loginData->data->phone, "owner" => $loginData->data->owner, "role" => $loginData->data->role, "status" => $loginData->data->status];
                Session::put('user', $userData);

                setcookie(env("LOGIN_COOKIE", 'phpsess'), $loginData->token->value, $loginData->token->expiration + 30*24*3600, '/', env('DOMAIN_COOKIE', ".kangkoding.com"));

                if(Session::has('checkout')){
                    return redirect('/checkout');
                } else{
                    return redirect('/');
                }
            } else{
                return redirect('login')->with('error', 'Email atau kata kunci salah');
            }
        }
    }

    public function signout(Request $request){
        Session::forget('user');

        if(Session::)
        Session::forget('cart');


        return redirect('/');
    }
}
