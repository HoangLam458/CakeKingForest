<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Models\loaisanpham;
use App\Models\sanpham;
use App\Models\size;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;


class CartController extends Controller
{
    public function cart($id)
    {
        $sizes = size::all();
        $category = loaisanpham::all();
        $currentTime = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->format('d/m/Y');
        $lstCart = hoadon::where('users_id', $id)->where('trangthai', 0)->first();
        if ($lstCart == null) {
            Session::forget('cate');
            return view('pages.user.cart', [
                'ls' => $lstCart,
                'category' => $category
            ]);
        }

        $user = hoadon::where('users_id', $id)->get();
        $total = 0;
        $cart = 0;
        $lsInD = DB::table('chitiethoadons')->join('sanphams', 'sanpham_id', '=', 'sanphams.id')
            ->join('hoadons', 'hoadon_id', '=', 'hoadons.id')->join('sizes', 'size_id', '=', 'sizes.id')
            ->where('hoadon_id', $lstCart->id)->where('hoadons.trangthai', 0)
            ->select(
                '*',
                'chitiethoadons.id as idchitiet',
                'chitiethoadons.giatien as thanhtien',
                'sanphams.tensp as tensanpham',
                'sanphams.giatien as giaban',
                'sizes.id as idsize',
                'sizes.tensize as s_name',
                'sanphams.hinhanh as img'
            )
            ->orderBy("idchitiet")
            ->get();
        foreach ($lsInD as $in) {
            $total = $total + $in->thanhtien;
            $cart = $cart + $in->soluong;
        }

        return view('pages.user.cart', [], [
            'ls' => $lstCart,
            'lsInD' => $lsInD,
            'user' => $user,
            'total' => $total,
            'datenow' => $currentTime,
            'category' => $category,
            'size' => $sizes
        ]);

    }
    public function add_to_cart(Request $request, $id)
    {
        if(Session::has('cate') == null)
        {
            Session::put('cate');
        }
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
                    $chitiet =
                        chitiethoadon::where('hoadon_id', $user->id)
                            ->where('size_id', $request['size'])
                            ->where('sanpham_id', $request['id'])
                            ->get();
                    if ($chitiet != null)
                        foreach ($chitiet as $item) {
                            Session::push('cate', $item);
                        }
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
                'soluong' => $request['quantity'],
                'ghichu' => "",
                'giatien' => $sanpham->giatien,
                'hoadon_id' => $user2->id,
                'size_id' => $request['size'],
                'sanpham_id' => $request['id']
            ]);
            $chitiet =
                chitiethoadon::where('hoadon_id', $user2->id)
                    ->where('size_id', $request['size'])
                    ->where('sanpham_id', $request['id'])
                    ->get();
            if ($chitiet != null)
                foreach ($chitiet as $item) {
                    Session::push('cate', $item);
                }
            return redirect()->back();
        }
        return redirect()->route('cake');
    }

    public function checkout($id, Request $request)
    {
        $currentTime = Carbon::now();

        $user = hoadon::where('users_id', $id)->where('trangthai', 0)->first();
        if ($user != Null) {
            $user->ngaylaphd = Carbon::createFromFormat('Y-m-d H:i:s', $currentTime)->format('Y-m-d');
            $user->tenkhachhang = $request->get('tenkhachhang');
            $user->sdtkhachhang = $request->get('sdtkhachhang');
            $user->diachigiaohang = $request->get('diachigiaohang');
            $user->ngaynhanhang = Carbon::createFromFormat('d-m-Y', $request->get('date'))->format('Y-m-d');
            $user->hinhthucnhanhang = $request->get('ship');
            $user->phuongthucthanhtoan = "Tiền Mặt";
            $user->trangthai = 1;
            $user->save();
            Session::forget('cate');
            return redirect()->route('cart', $id);
        } else
            return view('homeuser');
    }


    public function add_to_cartss(Request $request)
    {
        if(Session::has('cate') == null)
        {
            Session::put('cate');
        }
        $sanpham = sanpham::find($request->get('id'));
        $currentTime = Carbon::now();
        $phantram = size::find($request->get('size'));
        $code_cookie = $request->cookie('code');
        $user = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();
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
                    $hd = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();
                    if ($hd != null) {
                        $chitiet =
                            chitiethoadon::where('hoadon_id', $hd->id)
                                ->where('size_id', $request['size'])
                                ->where('sanpham_id', $request['id'])
                                ->get();
                        if ($chitiet != null)
                            foreach ($chitiet as $item) {
                                Session::push('cate', $item);
                            }
                    }
                    return redirect()->back();
                }
            }
        } else {
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
            $chitiet =
                chitiethoadon::where('hoadon_id', $hoadon_id2->id)
                    ->where('size_id', $request['size'])
                    ->where('sanpham_id', $request['id'])
                    ->get();
            if ($chitiet != null)
                foreach ($chitiet as $item) {
                    Session::push('cate', $item);
                }
            $test = Cookie::forever('code', $code);
            return response()->redirectToRoute('shop')->withCookie($test);
        }
    }
    public function cartss(Request $request)
    {
        $category = loaisanpham::all();
        $code_cookie = $request->cookie('code');
        $currentTime = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->format('d/m/Y');
        $user1 = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();
        $sizes = size::all();
        if ($user1 == null) {
            Session::forget('cate');
            return view('pages.user.cart', [], [
                'ls' => $user1,
                'category' => $category
            ]);
        }
        $user = hoadon::where('mahd', $code_cookie)->get();
        $total = 0;
        $cart = 0;
        $lsInD = DB::table('chitiethoadons')->join('sanphams', 'sanpham_id', '=', 'sanphams.id')
            ->join('hoadons', 'hoadon_id', '=', 'hoadons.id')->join('sizes', 'size_id', '=', 'sizes.id')
            ->where('hoadon_id', $user1->id)->where('hoadons.trangthai', 0)
            ->select(
                '*',
                'chitiethoadons.id as idchitiet',
                'chitiethoadons.giatien as thanhtien',
                'sanphams.tensp as tensanpham',
                'sanphams.giatien as giaban',
                'sizes.id as idsize',
                'sizes.tensize as s_name',
                'sanphams.hinhanh as img'
            )
            ->orderBy("idchitiet")
            ->get();
        foreach ($lsInD as $in) {
            $total = $total + $in->thanhtien;
            $cart = $cart + $in->soluong;
        }

        return view('pages.user.cart', [], [
            'ls' => $user1,
            'lsInD' => $lsInD,
            'user' => $user,
            'total' => $total,
            'size' => $sizes,
            'datenow' => $currentTime,
            'category' => $category
        ]);
    }
    public function checkoutss(Request $request)
    {
        $code_cookie = $request->cookie('code');
        $currentTime = Carbon::now();
        $user = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();
        if ($user != Null) {
            $user->ngaylaphd = Carbon::createFromFormat('Y-m-d H:i:s', $currentTime)->format('Y-m-d');
            $user->tenkhachhang = $request->get('tenkhachhang');
            $user->sdtkhachhang = $request->get('sdtkhachhang');
            $user->diachigiaohang = $request->get('diachigiaohang');
            $user->ngaynhanhang = Carbon::createFromFormat('d-m-Y', $request->get('date'))->format('Y-m-d');
            $user->hinhthucnhanhang = $request->get('ship');
            $user->phuongthucthanhtoan = "Tiền Mặt";
            $user->trangthai = 1;
            $user->save();
            $request->cookie('code');
            Cookie::forget('code');
            Session::forget('cate');
            return redirect()->route('cartss');
        } else
            return view('homeuser');
    }

    public function updateqty($id, Request $request)
    {
        $code_cookie = $request->cookie('code');
        $chitiet = chitiethoadon::find($id);
        $hoadon = hoadon::where('mahd', $code_cookie)->first();
        $chitiettrung = chitiethoadon::where('hoadon_id', $hoadon->id)->get();
        $sanpham = sanpham::find($chitiet->sanpham_id);
        $phantrams = size::find($request->get('size_id'));

        if ($chitiet != null) {
            if ($chitiet->size_id != $request->get('size_id')) {
                foreach ($chitiettrung as $trung) {
                    if ($trung->sanpham_id == $chitiet->sanpham_id && $trung->size_id == $request->get('size_id')) {
                        $giusl = $request->get('quantity');
                        $idsp = $chitiet->sanpham_id;
                        $timchitiet = chitiethoadon::where('sanpham_id', $idsp)
                            ->where('hoadon_id', $hoadon->id)->where('size_id', $request->get('size_id'))->first();
                        $timchitiet->soluong = $timchitiet->soluong + $giusl;
                        $timchitiet->giatien = ($sanpham->giatien * ($timchitiet->soluong + $giusl)) + ($sanpham->giatien * ($timchitiet->soluong + $giusl)) * ($phantrams->phantram / 100);
                        $timchitiet->save();
                        $chitiet->delete();
                    }
                }
                Session::forget('cate');
                $chitiet =
                    chitiethoadon::where('hoadon_id', $hoadon->id)
                        ->get();
                if ($chitiet != null)
                    foreach ($chitiet as $item) {
                        Session::push('cate', $item);
                    }
                return redirect()->back();
            }
            $chitiet->soluong = $request->get('quantity');
            $chitiet->size_id = $request->get('size_id');
            $chitiet->giatien = ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantrams->phantram / 100);
            $chitiet->ghichu = $request->get('ghichu');
            $chitiet->save();
            return redirect()->back();
        }
    }
}
