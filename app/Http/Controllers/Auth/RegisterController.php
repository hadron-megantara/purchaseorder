<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;

class RegisterController extends Controller
{
    public function index(Request $request){
        return view('auth.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(Request $request)
    {
        if($request->has('email') && $request->has('fullname') && $request->has('password') && $request->has('passwordConfirmation')){
            if($request->password == $request->passwordConfirmation){
                $client = new Client;
                $response = $client->request('POST', env('API_URL', 'http://192.168.1.103:212/api/v1/').'register', [
                    'query' => ['owner' => env('OWNER_ID', 1), 'email' => $request->email, 'fullname' => $request->fullname, 'password' => $request->password]
                ]);

                $responseData = json_decode($response->getBody()->getContents());

                if($responseData->isError == false){
                    $account = $responseData->isResponse->data;
                    $userData = ["id" => $account->id, "email" => $account->email, "fullname" => $account->name, "owner" => $account->owner];
                    Session::put('user', $userData);

                    return redirect('/');
                }
            } else{
                Session::flash('error', 'Gagal registrasi. Konfirmasi password tidak sama');
                return redirect('/login');
            }
        } else{
            Session::flash('error', 'Gagal registrasi. Mohon isi semua field');
            return redirect('/login');
        }

        dd($request->all());
    }
}
