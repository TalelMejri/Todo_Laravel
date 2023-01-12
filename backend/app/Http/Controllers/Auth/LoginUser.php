<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUser extends Controller
{
    public function login(request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

            $authUser=Auth::User();
            $token=$authUser->createToken('api_token')->plainTextToken;

            $reponse=[
                'token'=>$token,
                'user'=>$authUser
            ];

            return response()->json($reponse,201);
        }else{
            return response()->json(["message"=>"user not found"],401);
        }
    }
}
