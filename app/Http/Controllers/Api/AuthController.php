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

    public function register(Request $request)
    {
            $data = $request->all();
            $reles=[
                'name'=>'required|min:3|max:20',
                'mobile'=>'required|min:1|max:12',
                'password'=>'required|confirmed',
            ];

            $validator=Validator::make($request->all(), $rules, [] , \App\User::$aliases);

            if($validator->fials) {
                return reponse($validator->message()->first(),401);
            }

            try{
                $newUser = User::create($data);

                $token = JWTAuth::fromUser($newUser);
                return reponse()->json(compact('token'));
            } catch(\Exception $e){
                return response('system error',500);
            }
    }

    public function getAuthenticateUser(Request $request)
    {
            try{
                    if(!$user=JWTAuth::parseToken()->authenticate()){
                            return response('user_not_found',404);
                    }

            } catch(\Tymon\JWTAuth\Exception\TokenExpiredException $e){
                        return response('token_expired', $e->getStatusCode() );
            } catch(\Tymon\JWTAuth\Exception\TokenInvalidException $e){
                        return response('token_invalid', $e->getStatusCode() );
            } catch(\Tymon\JWTAuth\Exception\JWTException $e){
                        return response('token_absent', $e->getStatusCode() ); 
            }

            return reponse()->json(compact('user'));
    }

    public function updatePassword(Request $request)
    {
            $data = $request->all();
            try{
                    if(!$user=JWTAuth::parseToken()->authenticate()){
                            return response('user_not_found',404);
                    }

            } catch(\Tymon\JWTAuth\Exception\TokenExpiredException $e){
                        return response('token_expired', $e->getStatusCode() );
            } catch(\Tymon\JWTAuth\Exception\TokenInvalidException $e){
                        return response('token_invalid', $e->getStatusCode() );
            } catch(\Tymon\JWTAuth\Exception\JWTException $e){
                        return response('token_absent', $e->getStatusCode() ); 
            }

            if(!password_verify($data['oldPassword'],$user['password'])){
                    return response('oldpassword don\'t match', 400);
            }

            if($data['password']!==$data['password_confirmation']){
                    return response('password confirmation failed', 400);
            }

            $user['password']=bcrypt($data['password']);

            try{
                    $user->save();
                    return response('修改成功');
            } catch (\Exception $e) {
                    return response($e->getMessage(),500);
            }
    }


    
}
