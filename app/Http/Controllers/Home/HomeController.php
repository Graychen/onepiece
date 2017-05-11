<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class HomeController extends Controller
{

    public function index()
    {
        echo "AdminIndex";
    }
}
