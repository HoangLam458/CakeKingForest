<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function homepage()
    {
        $product = sanpham::all()->random(8);
        return view('homeuser',[
            'product'=>$product
        ]);
    }
}
