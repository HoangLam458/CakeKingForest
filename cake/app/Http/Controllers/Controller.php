<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function randHD(){
        $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str="";
        $size = strlen($string);
        for($i = 0; $i < 4; $i++)
        {
            $str = $str . $string[rand(0,$size-1)];
        }
        return $str;
    }
}
