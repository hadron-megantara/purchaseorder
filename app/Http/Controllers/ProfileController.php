<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Client;

class ProfileController extends Controller
{
    public function index(Request $request){
        $user = session('user');
        $token = $request->get('token');

        $client = new Client;
        $response = $client->get(env('API_URL', 'http://192.168.1.103:212/api/v1/').'profile/address/get', [
            'headers' => ['Authorization' => 'Bearer '.$token]
        ]);

        $responseData = json_decode($response->getBody()->getContents());
        $address = $responseData->isResponse;

        $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'config/province/get');
        $responseData = json_decode($response->getBody()->getContents());
        $provinceResponse = $responseData->isResponse->data;

        $data = array(
            'user' => $user,
            'province' => $provinceResponse,
            'address' => $address
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
        $token = $request->get('token');

        $client = new Client;
        $response = $client->post(env('API_URL', 'http://192.168.1.103:212/api/v1/').'profile/address/add', [
            'headers' => ['Authorization' => 'Bearer '.$token],
            'query' => [
                'recipientName' => $request->addressRecipientName,
                'recipientPhone' => $request->addressRecipientPhone,
                'name' => $request->addressName,
                'address' => $request->address,
                'province' => $request->provinceId,
                'city' => $request->cityId,
                'district' => $request->districtId]
        ]);

        $responseData = json_decode($response->getBody()->getContents());

        return redirect('/profile')->with('success', $responseData->isMessage);
    }

    public function editAddress(Request $request){
        $token = $request->get('token');

        $client = new Client;
        $response = $client->post(env('API_URL', 'http://192.168.1.103:212/api/v1/').'profile/address/edit', [
            'headers' => ['Authorization' => 'Bearer '.$token],
            'query' => [
                'recipientName' => $request->addressRecipientName,
                'recipientPhone' => $request->addressRecipientPhone,
                'name' => $request->addressName,
                'address' => $request->address,
                'province' => $request->provinceId,
                'city' => $request->cityId,
                'district' => $request->districtId]
        ]);

        $responseData = json_decode($response->getBody()->getContents());

        return redirect('/profile')->with('success', $responseData->isMessage);
    }

    public function bank(Request $request){
        return view('profile.bank');
    }

    public function bookingHistory(Request $request){
        $user = session('user');
        $token = $request->get('token');

        $client = new Client;
        $response = $client->get(env('API_URL', 'http://192.168.1.103:212/api/v1/').'order/list/get', [
            'query' => ['owner' => env('OWNER_ID', 1), 'account' => $user['id']]
        ]);

        $responseData = json_decode($response->getBody()->getContents());
        $bookingHistory = $responseData->isResponse;

        $data = array(
            'user' => $user,
            'bookingHistory' => $bookingHistory
        );

        return view('profile.booking-history', $data);
    }

    public function bookingHistoryDetail($id, Request $request){
        $user = session('user');
        $token = $request->get('token');

        $client = new Client;
        $response = $client->get(env('API_URL', 'http://192.168.1.103:212/api/v1/').'order/get', [
            'query' => ['orderCode' => $id]
        ]);

        $responseData = json_decode($response->getBody()->getContents());
        $bookingDetail = $responseData->isResponse->data;

        $data = array(
            'user' => $user,
            'bookingDetail' => $bookingDetail
        );

        return view('profile.booking-history-detail', $data);
    }
}
