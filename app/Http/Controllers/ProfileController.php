<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(Request $request){
        return view('profile.detail');
    }

    public function address(Request $request){
        return view('profile.address');
    }

    public function bank(Request $request){
        return view('profile.bank');
    }
}
