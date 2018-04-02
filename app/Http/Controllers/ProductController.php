<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ProductController extends Controller
{
    public function detail($id, Request $request){
        $client = new Client;

        try{
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'product/detail', [
                'query' => ['owner' => env('OWNER_ID', 1), 'productId' => $id]
            ]);

            $responseData = json_decode($response->getBody()->getContents());

            if($responseData->status == 'success'){
                $detail = $responseData->data->detail[0];

                $client = new Client;
                try{
                    $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'product/detail/photo', [
                        'query' => ['owner' => env('OWNER_ID', 1), 'productId' => $id]
                    ]);

                    $responseData = json_decode($response->getBody()->getContents());

                    if($responseData->status == 'success'){
                        $photo = $responseData->data->detail;

                        $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'product/detail/stock', [
                            'query' => ['owner' => env('OWNER_ID', 1), 'productId' => $id]
                        ]);

                        $responseData = json_decode($response->getBody()->getContents());
                        $stock = $responseData->isResponse->data;

                        $stockData = array();
                        foreach($stock as $stock){
                            if (!array_key_exists($stock->ColorId, $stockData)) {
                                $stockData[$stock->ColorId] = array('name' => $stock->ColorName);

                                $stockData[$stock->ColorId]['size'][$stock->SizeId] = array('name' => $stock->SizeName, 'total' => $stock->Total);
                            } else{
                                $stockData[$stock->ColorId]['size'][$stock->SizeId] = array('name' => $stock->SizeName, 'total' => $stock->Total);
                            }
                        }

                        $data = array(
                            'detail' => $detail,
                            'photo' => $photo,
                            'stock' => $stockData
                        );

                        return view('product.detail', $data);
                    }
                } catch (\Exception $e) {

                }
            }
        } catch (\Exception $e) {

        }
    }

    public function product(Request $request){

    }

    public function category(Request $request){
        $client = new Client;

        try{
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.104:212/api/v1/').'product/list', [
                'query' => ['owner' => env('OWNER_ID', 1), 'limit' => env('PRODUCT_LIST_LIMIT', 15)]
            ]);

            $responseData = json_decode($response->getBody()->getContents());

            $product = $responseData->data->product;
        } catch (\Exception $e) {
            print('Failed to Connect to Server');
        }

        try{
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'config/category/get');

            $responseData = json_decode($response->getBody()->getContents());
            if($responseData->isError == false){
                $categoryData = $responseData->isResponse->data;
            } else{

            }
        } catch (\Exception $e) {

        }

        try{
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'config/color/get');

            $responseData = json_decode($response->getBody()->getContents());
            if($responseData->isError == false){
                $colorData = $responseData->isResponse->data;
            } else{

            }
        } catch (\Exception $e) {

        }

        try{
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'config/size/get');

            $responseData = json_decode($response->getBody()->getContents());
            if($responseData->isError == false){
                $sizeData = $responseData->isResponse->data;
            } else{

            }
        } catch (\Exception $e) {

        }

        try{
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'config/gender/get');

            $responseData = json_decode($response->getBody()->getContents());
            if($responseData->isError == false){
                $genderData = $responseData->isResponse->data;
            } else{

            }
        } catch (\Exception $e) {

        }

        $data = array(
            'dataCategory' => $categoryData,
            'dataColor' => $colorData,
            'dataGender' => $genderData,
            'dataSize' => $sizeData,
            'productList' => $product
        );

        return view('product.list', $data);
    }
}
