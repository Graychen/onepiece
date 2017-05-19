<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
       $goods=DB::table('goods')->paginate(15); 
        return view('home.index',['goods'=>$goods]);
    }

    public function create()
    {
        return view('home.create');
    }
}
