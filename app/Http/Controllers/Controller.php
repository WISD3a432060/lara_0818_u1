<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function email(){
        $content='test';
        $data = ['name' => '張三', 'content'=> $content, ];
        Mail::later('email.test', $data, function($message){
            $message->subject('Laravel 5 Mail');
            $message->to('a9101021249@gmail.com', '張三');
            $message->from('netadmin@ncut.edu.tw', 'netadmin');
        });

}}
