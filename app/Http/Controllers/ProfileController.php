<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Client;

class ProfileController extends Controller
{
    public function index(Request $request){
        $user = session('user');

        $client = new Client;
        $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'config/province/get');
        $responseData = json_decode($response->getBody()->getContents());
        $provinceResponse = $responseData->isResponse->data;

        $data = array(
            'user' => $user,
            'province' => $provinceResponse
        );

        return view('profile.index', $data);
    }

    public function edit(Request $request){
        return view('profile.detail');
    }

    public function address(Request $request){
        return view('profile.address');
    }

    public function addAddress(Request $request){
        $user = session('user');

        $client = new Client;
        $response = $client->request('POST', env('API_URL', 'http://192.168.1.103:212/api/v1/').'profile/address/add', [
            'query' => ['userId' => $user['id'], 'name' => $request->addressName, 'address' => $request->address, 'province' => $request->provinceId, 'city' => $request->cityId, 'districtId' => $request->districtId]
        ]);

        $responseData = json_decode($response->getBody()->getContents());
        $provinceResponse = $responseData->isResponse->data;

        return redirect('/profile');
    }

    public function bank(Request $request){
        return view('profile.bank');
    }
}
