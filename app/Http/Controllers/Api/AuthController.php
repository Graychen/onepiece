<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exception\JWTException;
use App\User;
use Validator;


class AuthController extends BaseApiController
{
        
    public function authenticate(Request $request)
    {
        $credentials=$request->only('name','password');
        try{
                if(!$token=JWTAuth::attempt($credentials)){
                        return reponse('验证没有通过',401);
                }
        }catch(JWTeXception $e){
                return reponse('无法创建token',500);
        }
        return reponse()->json(compact('token'));
    }


    
}
