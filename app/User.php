<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'mobile', 'email', 'password', 'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','api_token',
    ];

    public function getJWTIdentifier()
    {
            return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
            return [];
    }

    public static $aliases=[
        'name'=>'用户名',
        'mobile'=>'手机',
        'email'=>'邮箱',
        'password'=>'密码',
        'api_token'=>'apitoken',
    ];
}
