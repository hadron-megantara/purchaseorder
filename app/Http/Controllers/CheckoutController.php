<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Client;

class CheckoutController extends Controller
{
    public function index(Request $request){
        if(Session::has('cart')){
            $cartSession = session('cart');
            $productParam = '';
            $totalProduct = 0;

            foreach($cartSession['data'] as $cartSessionKey => $cartSessionVal){
                if($productParam == ''){
                    $productParam = $cartSessionKey;
                } else{
                    $productParam = $productParam.','.$cartSessionKey;
                }
            }

            $client = new Client;
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'product/detail/list', [
                'query' => ['owner' => env('OWNER_ID', 1), 'productIdList' => $productParam]
            ]);
            $responseData = json_decode($response->getBody()->getContents());
            $productListResponse = $responseData->isResponse->data;

            $productListTemp = array();
            foreach($productListResponse as $productListResponse){
                foreach($cartSession['data'] as $cartSessionKey => $cartSessionVal){
                    if($cartSessionKey == $productListResponse->Id){
                        foreach($cartSessionVal as $cartSessionKey2 => $cartSessionVal2){
                            if($cartSessionKey2 == $productListResponse->ColorId){
                                foreach($cartSessionVal2 as $cartSessionKey3 => $cartSessionVal3){
                                    if($cartSessionKey3 == $productListResponse->SizeId){
                                        $productListTemp[$cartSessionKey][$cartSessionKey2][$cartSessionKey3]['name'] = $productListResponse->Name;
                                        $productListTemp[$cartSessionKey][$cartSessionKey2][$cartSessionKey3]['color'] = $productListResponse->ColorName;
                                        $productListTemp[$cartSessionKey][$cartSessionKey2][$cartSessionKey3]['size'] = $productListResponse->SizeName;
                                        $productListTemp[$cartSessionKey][$cartSessionKey2][$cartSessionKey3]['total'] = $cartSessionVal3;
                                        $productListTemp[$cartSessionKey][$cartSessionKey2][$cartSessionKey3]['price'] = $productListResponse->newPrice;
                                    }
                                }
                            }
                        }
                    }
                }
            }

            $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'config/province/get');
            $responseData = json_decode($response->getBody()->getContents());
            $provinceResponse = $responseData->isResponse->data;

            // $user = session('user');

            $userData = null;
            if(Session::has('user')){
                $userData = session('user');
            }

            $data = array(
                'productDetail' => $productListTemp,
                'province' => $provinceResponse,
                'userData' => $userData
            );

            return view('checkout', $data);
        }
    }

    public function checkout(Request $request){
        $cartSession = session('cart');
        $productList = "";

        foreach($cartSession['data'] as $cartSessionKey => $cartSessionVal){
            foreach($cartSessionVal as $cartSessionKey2 => $cartSessionVal2){
                foreach($cartSessionVal2 as $cartSessionKey3 => $cartSessionVal3){
                    if($productList != ""){
                        $productList = $productList.',';
                    }

                    $productList = $productList.$cartSessionKey.'-'.$cartSessionKey2.'-'.$cartSessionKey3.'-'.$cartSessionVal3;
                }
            }
        }

        $userData = session('user');

        $postCode = '';
        if($request->has('postCode') && $request->postCode != ''){
            $postCode = $request->postCode;
        }

        $client = new Client;
        $response = $client->request('POST', env('API_URL', 'http://192.168.1.103:212/api/v1/').'order/add', [
            'query' => ['owner' => env('OWNER_ID', 1), 'account' => $userData['id'], 'fullname' => $request->fullname,
                    'phone' => $request->phone, 'province' => $request->province, 'productList' => $productList,
                    'city' => $request->city, 'district' => $request->district, 'address' => $request->address, 'postCode' => $postCode]
        ]);

        Session::forget('cart');

        $responseData = json_decode($response->getBody()->getContents());
        $checkoutData = $responseData->isResponse->data;
    }

    public function paymentMethod(Request $request){
        return view('payment-method');
    }
}
