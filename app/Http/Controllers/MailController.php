<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;

class MailController extends Controller
{
       public function send() 
       {
               $name="graychen";
               $flag= Mail::send('emails.test',['name'=>$name],function($message){
                       $to='13780185250@163.com';
                       $message->to($to)->subject('测试邮件');
               });
               if($flag){
                       echo '发送成功,请查收!';
               }else{
                       echo '发送失败,请重试!';
               }
       }
}
