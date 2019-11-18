<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request ){
        $validateData = $request->validate([
            'name'=>'required|max 55',
            'email'=>'email|required\ unique.users',
            'password'=>'required|confirmed ',
        ]);

        $user = User::create($validateData);

        $accessToken = $user->createToken('authToken')->accessToken; 

        return response(['user'=>$user, 'access_token'=>$accessToken]);
    }
}
