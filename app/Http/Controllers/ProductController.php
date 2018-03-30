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

                        $data = array(
                            'detail' => $detail,
                            'photo' => $photo
                        );

                        return view('product.detail', $data);
                    }
                } catch (\Exception $e) {

                }
            }
        } catch (\Exception $e) {

        }
    }
}
