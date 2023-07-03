<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Models\loaisanpham;
use App\Models\sanpham;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

Session::start();
class HomeUserController extends Controller
{
    public function homepage(Request $request)
    {



        $product = sanpham::all()->random(8);
        Session::put('cate');
        $category = loaisanpham::all();
        $code_cookie = $request->cookie('code');
        if(auth()->user()== null)
        {
            if($code_cookie != null){
            $hd = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();
            if($hd != null)
            {
            $chitiet = chitiethoadon::where('hoadon_id',$hd->id)->get();
            if($chitiet!=null)
            foreach ($chitiet as $item)
            {
                Session::push('cate',$item);
            }
            }
        }
        }
        else
        {
            $hd = hoadon::where('users_id', auth()->user()->id)->where('trangthai', 0)->first();
            if($hd != null)
            {
            $chitiet = chitiethoadon::where('hoadon_id',$hd->id)->get();
            if($chitiet!=null)
            foreach ($chitiet as $item)
            {
                Session::push('cate',$item);
            }
            }
        }
        return view('homeuser',[
            'product'=>$product,
            'category'=>$category
        ]);
    }
}
