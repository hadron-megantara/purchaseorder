<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ConfigController extends Controller
{
    public function getProvince(Request $request){
        $client = new Client;

        $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'config/province/get');
        $responseData = json_decode($response->getBody()->getContents());
        $provinceResponse = $responseData->isResponse->data;

        return $provinceResponse;
    }

    public function getCity(Request $request){
        $client = new Client;
        $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'config/city/get',[
            'query' => ['provinceId' => $request->provinceId]
        ]);
        $responseData = json_decode($response->getBody()->getContents());
        $cityResponse = $responseData->isResponse->data;

        return $cityResponse;
    }

    public function getDistrict(Request $request){
        $client = new Client;
        $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'config/district/get',[
            'query' => ['cityId' => $request->cityId]
        ]);
        $responseData = json_decode($response->getBody()->getContents());
        $districtResponse = $responseData->isResponse->data;

        return $districtResponse;
    }

}
