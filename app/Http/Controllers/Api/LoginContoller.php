<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginContoller extends Controller
{
    function login(Request $request){
        $this->validateLogin($request);

        if(Auth::attempt($request->only('email', 'password'))){
            return response()->json([
               'token'=>$request->user()->createToken($request->name)->plainTextToken,
               'message'=>'Success login!' 
            ]);
        }

        return response()->json([
           'message' => 'Unauthorized' 
        ], 401);
    }

    function validateLogin(Request $request){
        return $request->validate([
            'email'=>'required|email',
            'password' => 'required',
            'name' => 'required'
            ]
        );
    }
}