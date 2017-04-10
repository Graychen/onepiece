<?php
namespace App\Http\Controllers;

//use Log;
use App\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;

class UserController extends Controller{
   // public function showProfile($id)
   // {
   //     Log::info('Showing user profile for user:'.$id);
   //     return view('user.profile',['user'=>User::findOrFail($id)]);
   // }
   protected $users;

   public function __construct(UserRepository $users)
   {
       $this->users=$users;
   }

   public function show($id)
   {
        $user = $this->users->find($id);
        return view('user.profile',['user'=>$user]);
   }

}
