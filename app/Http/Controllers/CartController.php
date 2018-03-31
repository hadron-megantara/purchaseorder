<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request){
        return view('cart');
    }

    public function addToCart(Request $request){
        return json_encode($request->all());
    }
}
