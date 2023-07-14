<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Models\loaisanpham;
use App\Models\sanpham;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

Session::start();
class HomeUserController extends Controller
{
    public function homepage(Request $request)
    {
        $product = DB::table('chitiethoadons')
        ->join('sanphams','chitiethoadons.sanpham_id','=','sanphams.id')
        ->join('hoadons','hoadon_id','=','hoadons.id')
        ->where('sanphams.trangthai',1)->where('hoadons.trangthai',4)
        ->select(DB::raw('SUM(soluong) as count'),'sanphams.id as product_id','tensp as tensanpham','sanphams.hinhanh as hinhanh','sanphams.giatien as giatien')
        ->groupBy('sanphams.tensp','sanphams.id','sanphams.hinhanh','sanphams.giatien')->orderBy('count','DESC')
        ->take(12)->get();
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
