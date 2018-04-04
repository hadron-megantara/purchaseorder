<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;

class LoginController extends Controller
{
    public function index(Request $request){
        return view('auth.login');
    }

    public function signout(Request $request){
        Session::forget('user');
        Session::forget('cart');

        return redirect('/');
    }
}
