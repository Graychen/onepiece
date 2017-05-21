<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class FileController extends Controller
{
    public function upload(Requests\PicRequest $request)
    {
        $path = $request->file('file')->store('file');
        
        return $path;
    }    

}
