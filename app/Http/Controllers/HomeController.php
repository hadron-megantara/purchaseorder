<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index(Request $request){
        $client = new Client;

        try{
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'product/list', [
                'query' => ['owner' => env('OWNER_ID', 1)]
            ]);

            $responseData = json_decode($response->getBody()->getContents());

            if($responseData->status == 'success'){
                $product = $responseData->data;

                $data = array(
                    'product' => $product,
                );

                return view('home', $data);
            }
        } catch (\Exception $e) {

        }
    }
}
