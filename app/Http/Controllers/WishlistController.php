<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Request $request){
        $token = $request->get('token');
        dd($token);

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

        // $data = array(
        //     '' =>
        // );

        return view('profile.wishlist');
    }
}
