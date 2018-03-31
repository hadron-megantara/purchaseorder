<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;
use App\Profile;

class CartController extends Controller
{
    public function index(Request $request){
        return view('cart');
    }

    public function addToCart(Request $request){
        // Session::forget('cart');

        $countCartTotal = 0;
        if(Session::has('cart')){
            $cartSession = Session('cart');
            $cartSessionTemp = $cartSession;
            $countCartTotal = $request->total + $cartSession['total'];
            $cartSessionTemp['total'] = $countCartTotal;
            $break = false;

            foreach($cartSession['data'] as $cartSessionKey => $cartSessionVal){
                if(!$break){
                    if($cartSessionKey == $request->id){
                        foreach($cartSessionVal as $cartSessionKey2 => $cartSessionVal2){
                            if(!$break){
                                if($cartSessionKey2 == $request->color){
                                    foreach($cartSessionVal2 as $cartSessionKey3 => $cartSessionVal3){
                                        if($cartSessionKey3 == $request->size){
                                            $cartSessionTemp['data'][$cartSessionKey][$cartSessionKey2][$cartSessionKey3] = $cartSessionVal3 + (int) $request->total;
                                            $break = true;
                                            break;
                                        } else{
                                            $cartSessionTemp['data'][$cartSessionKey][$cartSessionKey2][$request->size] = (int) $request->total;
                                        }
                                    }
                                } else{
                                    $cartSessionTemp['data'][$cartSessionKey][$request->color][$request->size] = (int) $request->total;
                                }
                            } else{
                                break;
                            }
                        }
                    } else{
                        $cartSessionTemp['data'][$cartSessionKey][$request->color][$request->size] = (int)$request->total;
                    }
                } else{
                    break;
                }
            }
        } else{
            $countCartTotal = $request->total;
            $cartSessionTemp['total'] = $countCartTotal;
            $cartSessionTemp['data'][$request->id] = array($request->color => array($request->size => (int) $request->total));
        }

        Session::put('cart', $cartSessionTemp);

        return json_encode($countCartTotal);
    }
}
