<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Models\sanpham;
use App\Models\size;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    public function cart($id)
    {

        $currentTime = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->format('d/m/Y');
        $user1 = hoadon::where('users_id', $id)->where('trangthai', 0)->first();
        if ($user1 == null) {
            return view('pages.user.cart', [], [
                'ls' => $user1
            ]);
        }

        $user = hoadon::where('users_id', $id)->get();
        $total = 0;
        $lsInD = DB::table('chitiethoadons')->join('sanphams', 'sanpham_id', '=', 'sanphams.id')
            ->join('hoadons', 'hoadon_id', '=', 'hoadons.id')->join('sizes', 'size_id', '=', 'sizes.id')
            ->where('hoadon_id', $user1->id)->where('hoadons.trangthai', 0)
            ->select('*', 'chitiethoadons.id as idchitiet', 'chitiethoadons.giatien as thanhtien', 'sanphams.tensp as tensanpham', 'sanphams.giatien as giaban',
             'sizes.tensize as s_name','sizes.phantram as sizeptr', 'sanphams.hinhanh as img')->get();
        foreach ($lsInD as $in) {
            $total = $total + $in->thanhtien;
        }
        return view('pages.user.cart', [], [
            'ls' => $user1,
            'lsInD' => $lsInD,
            'user' => $user,
            'total' => $total,
            'datenow' => $currentTime
        ]);

    }
    public function add_to_cart(Request $request, $id)
    {
        $user = hoadon::where('users_id', $id)->where('trangthai', 0)->first();
        $taikhoan = User::find($id);
        $sanpham = sanpham::find($request->get('id'));
        $phantram = size::find($request->get('size'));
        if ($user != null) {
            $chitiethoadon = chitiethoadon::where('hoadon_id', $user->id)->get();
            foreach ($chitiethoadon as $chitiet) {
                if ($chitiet->sanpham_id == $request->get('id') && $chitiet->size_id == $request['size']) {
                    $chitiet->soluong = $chitiet->soluong + $request['quantity'];
                    $total = ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantram->phantram / 100);
                    $chitiet->giatien = $chitiet->giatien + $total;
                    $chitiet->save();
                    return redirect()->back();
                }
            }
            foreach ($chitiethoadon as $chitiet) {
                if ($chitiet->sanpham_id != $request->get('id')) {
                    $request = $request->all();
                    Chitiethoadon::create([
                        'soluong' => $request['quantity'],
                        'ghichu' => "",
                        'giatien' => ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantram->phantram / 100),
                        'hoadon_id' => $user->id,
                        'size_id' => $request['size'],
                        'sanpham_id' => $request['id']
                    ]);
                    return redirect()->back();
                }
            }
        } else {
            $hoadon = hoadon::orderBy('id', 'DESC')->first();
            $code = 'HD' . '' . (string) ($hoadon->id + 1);
            $currentTime = Carbon::now();
            hoadon::create([
                'mahd' => $code,
                'ngaylaphd' => $currentTime,
                'tenkhachhang' => $taikhoan->tenkhachhang,
                'diachigiaohang' => $taikhoan->diachi,
                'sdtkhachhang' => $taikhoan->sdt,
                'hinhthucnhanhang' => "",
                'ngaynhanhang' => null,
                'phuongthucthanhtoan' => "",
                'trangthai' => 0,
                'users_id' => $id
            ]);
            $user2 = hoadon::where('users_id', $id)->where('trangthai', 0)->first();
            $request = $request->all();
            chitiethoadon::create([
                'soluong' => 1,
                'ghichu' => "",
                'giatien' => $sanpham->giatien,
                'hoadon_id' => $user2->id,
                'size_id' => 1,
                'sanpham_id' => $request['id']
            ]);
            return redirect()->back();
        }
        return redirect()->route('cake');
    }

    public function checkout($id, Request $request)
    {
        $user = hoadon::where('users_id', $id)->where('trangthai', 0)->first();
        if ($user != Null) {
            $currentTime = Carbon::createFromFormat('d-m-Y', $request->get('date'))->format('Y-m-d');
            $user->tenkhachhang = $request->get('tenkhachhang');
            $user->sdtkhachhang = $request->get('sdtkhachhang');
            $user->diachigiaohang = $request->get('diachigiaohang');
            $user->ngaynhanhang = $currentTime;
            $user->hinhthucnhanhang = $request->get('ship');
            $user->phuongthucthanhtoan = "Tiền Mặt";
            $user->trangthai = 1;
            $user->save();
            return redirect()->route('cart', $id);
        } else
            return view('homeuser');
    }


    public function add_to_cartss(Request $request)
    {
        $sanpham = sanpham::find($request->get('id'));
        $currentTime = Carbon::now();
        $phantram = size::find($request->get('size'));
        $code_cookie = $request->cookie('code');
        $user = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();
        if ($user != null)
        {
            $chitiethoadon = chitiethoadon::where('hoadon_id', $user->id)->get();
            foreach ($chitiethoadon as $chitiet) {
                if ($chitiet->sanpham_id == $request->get('id') && $chitiet->size_id == $request['size']) {
                    $chitiet->soluong = $chitiet->soluong + $request['quantity'];
                    $total = ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantram->phantram / 100);
                    $chitiet->giatien = $chitiet->giatien + $total;
                    $chitiet->save();
                    return redirect()->back();
                }
            }
            foreach ($chitiethoadon as $chitiet) {
                if ($chitiet->sanpham_id != $request->get('id')) {
                    $request = $request->all();
                    Chitiethoadon::create([
                        'soluong' => $request['quantity'],
                        'ghichu' => "",
                        'giatien' => ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantram->phantram / 100),
                        'hoadon_id' => $user->id,
                        'size_id' => $request['size'],
                        'sanpham_id' => $request['id']
                    ]);
                    return redirect()->back();
                }
            }
        }
        else
        {
            $hoadon = hoadon::orderBy('id', 'DESC')->first();
            $code = 'HD' . '' . (string) ($hoadon->id + 1);
            hoadon::create([
                'mahd' => $code,
                'ngaylaphd' => $currentTime,
                'tenkhachhang' => "",
                'diachigiaohang' => "",
                'sdtkhachhang' => "",
                'hinhthucnhanhang' => "",
                'ngaynhanhang' => null,
                'phuongthucthanhtoan' => "",
                'trangthai' => 0,
                'users_id' => null
            ]);
            $hoadon_id2 = hoadon::where('mahd', $code)->first();
            chitiethoadon::create([
                'soluong' => $request['quantity'],
                'ghichu' => "",
                'giatien' => $sanpham->giatien,
                'hoadon_id' => $hoadon_id2->id,
                'size_id' => $request['size'],
                'sanpham_id' => $request['id']
            ]);
            $test = Cookie::make('code', $code, 12000);
            return response()->redirectToRoute('shop')->withCookie($test);
        }
    }
    public function cartss(Request $request)
    {
        $code_cookie = $request->cookie('code');
        $currentTime = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->format('d/m/Y');
        $user1 = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();
        if ($user1 == null) {
            return view('pages.user.cart', [], [
                'ls' => $user1
            ]);
        }
        $user = hoadon::where('mahd', $code_cookie)->get();
        $total = 0;
        $lsInD = DB::table('chitiethoadons')->join('sanphams', 'sanpham_id', '=', 'sanphams.id')
            ->join('hoadons', 'hoadon_id', '=', 'hoadons.id')->join('sizes', 'size_id', '=', 'sizes.id')
            ->where('hoadon_id', $user1->id)->where('hoadons.trangthai', 0)
            ->select('*', 'chitiethoadons.id as idchitiet', 'chitiethoadons.giatien as thanhtien', 'sanphams.tensp as tensanpham', 'sanphams.giatien as giaban',
             'sizes.tensize as s_name','sizes.phantram as sizeptr', 'sanphams.hinhanh as img')->get();
        foreach ($lsInD as $in) {
            $total = $total + $in->thanhtien;
        }
        return view('pages.user.cart', [], [
            'ls' => $user1,
            'lsInD' => $lsInD,
            'user' => $user,
            'total' => $total,
            'datenow' => $currentTime
        ]);
    }
    public function checkoutss(Request $request)
    {
        $code_cookie = $request->cookie('code');
        $user = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();
        if ($user != Null) {
            $currentTime = Carbon::createFromFormat('d-m-Y', $request->get('date'))->format('Y-m-d');
            $user->tenkhachhang = $request->get('tenkhachhang');
            $user->sdtkhachhang = $request->get('sdtkhachhang');
            $user->diachigiaohang = $request->get('diachigiaohang');
            $user->ngaynhanhang = $currentTime;
            $user->hinhthucnhanhang = $request->get('ship');
            $user->phuongthucthanhtoan = "Tiền Mặt";
            $user->trangthai = 1;
            $user->save();
            $request->cookie('code');
            Cookie::forget('code');
            return redirect()->route('cartss');
        } else
            return view('homeuser');
    }
}