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
                                        $productListTemp[$cartSessionKey][$cartSessionKey2][$cartSessionKey3]['price'] = $productListResponse->Price;
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

            $data = array(
                'productDetail' => $productListTemp,
                'province' => $provinceResponse,
            );

            return view('checkout', $data);
        }
    }

    public function add(Request $request){
        $client = new Client;
        $response = $client->request('POST', env('API_URL', 'http://192.168.1.103:212/api/v1/').'order/add', [
            'query' => ['owner' => env('OWNER_ID', 1), 'productIdList' => $cartProductId]
        ]);

        $responseData = json_decode($response->getBody()->getContents());
        $productList = $responseData->isResponse->data;
    }
}
