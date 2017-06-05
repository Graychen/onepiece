<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Goods;


class FileController extends Controller
{
    public function upload(Request $request)
    {
        $goods=new Goods;
        $path = $request->file('file')->store('public');
        $goods->name=$request->name;
        $goods->pic =$path;
        if($goods->save()!==false){
            return redirect('success');
        }else{
            return redirect('create');
        }
          
    }    

}
