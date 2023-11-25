<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Laravel\Passport\HasApiTokens;

class AuthConroller extends Controller{
    public function Login(Request $request){
        $credenciales = $request -> only('username', 'password');
        if(Auth::attempt($credenciales)){
            $user = Auth::user();
            //create user token using auth class
            $token = $user->createToken('token')->accessToken;
            return response()->json(['token'=> $token], 200);
        }else{
            return response()->json(['error'=> 'No autorizado'], 401);
        }

    }
    

}