<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;

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

    public function success()
    {
        return "success";
    }

    public function detail(Request $request,$id)
    {
        $goods=DB::table('goods')->where('id',$id)->first();
        return view('home.detail',['goods'=>$goods]);
            
    }


//    public function validate(Requests\PicRequest $request)
//    {
//        return 'success';
//    }
}
