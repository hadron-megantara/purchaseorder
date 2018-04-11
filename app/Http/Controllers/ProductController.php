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

            if($responseData->isError == false){
                $detail = $responseData->isResponse->data->detail[0];

                $client = new Client;
                try{
                    $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'product/detail/photo', [
                        'query' => ['owner' => env('OWNER_ID', 1), 'productId' => $id]
                    ]);

                    $responseData = json_decode($response->getBody()->getContents());

                    if($responseData->isError == false){
                        $photo = $responseData->isResponse->data->detail;

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

    public function productList(Request $request){
        $productCategorySearch = array();
        $productGenderSearch = array();
        $productColorSearch = array();
        $categoryParam = "";
        $genderParam = "";
        $colorParam = "";
        if($request->has('product_search')){
            $productSearch = $request->product_search;

            if(isset($productSearch['categories'])){
                $productCategorySearch = $productSearch['categories'];

                foreach($productCategorySearch as $productCategorySearchDataKey => $productCategorySearchDataVal){
                    if($categoryParam == ""){
                        $categoryParam = $productCategorySearchDataVal;
                    } else{
                        $categoryParam = $categoryParam.','.$productCategorySearchDataVal;
                    }
                }
            }

            if(isset($productSearch['gender'])){
                $productGenderSearch = $productSearch['gender'];

                if(count($productGenderSearch) > 1){
                    $genderParam = 3;
                } else{
                    foreach($productGenderSearch as $productGenderSearchKey => $productGenderSearchVal){
                        if($genderParam == ""){
                            $genderParam = $productGenderSearchVal;
                        } else{
                            $genderParam = $genderParam.','.$productGenderSearchVal;
                        }
                    }
                }
            }

            if(isset($productSearch['color'])){
                $productColorSearch = $productSearch['color'];

                foreach($productColorSearch as $productColorSearchKey => $productColorSearchVal){
                    if($colorParam == ""){
                        $colorParam = $productColorSearchVal;
                    } else{
                        $colorParam = $colorParam.','.$productColorSearchVal;
                    }
                }
            }
        }

        $limitStart = 0;
        if($request->has('page') && $request->page != ''){
            $limitStart = ((int) $request->page - 1) * env('PRODUCT_LIST_LIMIT', 15);
        }

        $client = new Client;

        try{
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.104:212/api/v1/').'product/list', [
                'query' => ['owner' => env('OWNER_ID', 1), 'limit' => env('PRODUCT_LIST_LIMIT', 15), 'limitStart' => $limitStart, 'category' => $categoryParam, 'gender' => $genderParam, 'color' => $colorParam]
            ]);

            $responseData = json_decode($response->getBody()->getContents());

            $product = $responseData->isResponse->data->product;
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
            'productList' => $product,
            'productCategorySearch' => $productCategorySearch,
            'productGenderSearch' => $productGenderSearch,
            'productColorSearch' => $productColorSearch,
        );

        return view('product.list', $data);
    }

    public function category(Request $request){
        $client = new Client;

        try{
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.104:212/api/v1/').'product/list', [
                'query' => ['owner' => env('OWNER_ID', 1), 'limit' => env('PRODUCT_LIST_LIMIT', 15)]
            ]);

            $responseData = json_decode($response->getBody()->getContents());

            $product = $responseData->isResponse->data->product;
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
