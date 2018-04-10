<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;

class HomeController extends Controller
{
    public function index(Request $request){
        $user = null;
        if(Session::has('user')){
            $user = session('user');
        }

        $client = new Client;

        try{
            $response = $client->request('GET', env('API_URL', 'http://service.purchaseorder.local/api/v1/').'product/list/event/new', [
                'query' => ['owner' => env('OWNER_ID', 1)]
            ]);

            $responseData = json_decode($response->getBody()->getContents());

            if($responseData->isError == false){
                $responseData = $responseData->isResponse;
                $product = $responseData->data;

                $data = array(
                    'product' => $product,
                    'user' => $user,
                );

                return view('home', $data);
            }
        } catch (\Exception $e) {dd($e);
            print('Failed to Connect to Server');
        }
    }
}
