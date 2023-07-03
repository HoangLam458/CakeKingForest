<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Models\loaisanpham;
use App\Models\sanpham;
use App\Models\size;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function update_cart(Request $request)
    {
        dd($request->all());
    }
    public function cart(Request $request)
    {

        if(Session::has('data')) Session::forget('data');
        if (auth()->user()) {
            $sizes = size::all();
            $category = loaisanpham::all();
            $currentTime = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->format('d/m/Y');
            $lstCart = hoadon::where('users_id', auth()->user()->id)->where('trangthai', 0)->first();
            if ($lstCart == null) {
                Session::forget('cate');
                return view('pages.user.cart', [
                    'ls' => $lstCart,
                    'category' => $category
                ]);
            }
            $user = user::where('id', auth()->user()->id)->get();
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
                    'sanphams.id as id_sp',
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
        } else {
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
                    'sanphams.id as id_sp',
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
    }
    public function add_to_cart(Request $request)
    {
        if(Session::has('urlback')!=null){
            $backUrl = Session::pull('urlback');
        }

        if (Session::has('cate') == null) {
            Session::put('cate');
        }

        if (auth()->user())
        {
            $user = hoadon::where('users_id', auth()->user()->id)->where('trangthai', 0)->first();
            $taikhoan = User::find(auth()->user()->id);
            $sanpham = sanpham::find($request->get('id'));
            $phantram = size::find($request->get('size'));
            if ($user != null)
            {
                $chitiethoadon = chitiethoadon::where('hoadon_id', $user->id)->get();
                foreach ($chitiethoadon as $chitiet)
                {
                    if ($chitiet->sanpham_id == $request->get('id') && $chitiet->size_id == $request['size'])
                    {
                        if ($chitiet->soluong + $request['quantity'] > 10) {
                            Session::put('maxbanh','Bánh này đã đạt giới hạn số lượng!');
                            return redirect()->back();
                        } else {
                            $chitiet->soluong = $chitiet->soluong + $request['quantity'];
                            $total = ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantram->phantram / 100);
                            $chitiet->giatien = $chitiet->giatien + $total;
                            $chitiet->save();
                            return redirect()->back();
                        }
                    }
                }
                foreach ($chitiethoadon as $chitiet)
                {
                    if ($chitiet->sanpham_id == $request->get('id') && $chitiet->size_id != $request->get('size'))
                    {
                        Chitiethoadon::create([
                            'soluong' => $request['quantity'],
                            'ghichu' => "",
                            'giabanh' => $sanpham->giatien + $sanpham->giatien*($phantram->phantram / 100),
                            'giatien' => ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantram->phantram / 100),
                            'hoadon_id' => $user->id,
                            'size_id' => $request['size'],
                            'sanpham_id' => $request['id']
                        ]);
                        $chitiet2 =
                            chitiethoadon::where('hoadon_id', $user->id)
                                ->where('size_id', $request['size'])
                                ->where('sanpham_id', $request['id'])
                                ->get();
                        if ($chitiet2 != null)
                            foreach ($chitiet2 as $item) {
                                Session::push('cate', $item);
                            }
                        return redirect()->back();
                    }
                    else
                    {
                        Chitiethoadon::create([
                            'soluong' => $request['quantity'],
                            'ghichu' => "",
                            'giatien' => ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantram->phantram / 100),
                            'giabanh' => $sanpham->giatien + $sanpham->giatien*($phantram->phantram / 100),
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
            } else
            {
                $hoadon = hoadon::orderBy('id', 'DESC')->first();
                $codetest = $this->randHD();
                $code = 'HD' . '' . (string) ($hoadon->id + 1) . $codetest;
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
                    'users_id' => auth()->user()->id
                ]);
                $user2 = hoadon::where('users_id', auth()->user()->id)->where('trangthai', 0)->first();
                $request = $request->all();
                dd($request);
                chitiethoadon::create([
                    'soluong' => $request['quantity'],
                    'ghichu' => "",
                    'giabanh' => $sanpham->giatien + $sanpham->giatien*($phantram->phantram / 100),
                    'giatien' => ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantram->phantram / 100),
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
                    $test = Cookie::forever('code', $code);
                    return response()->redirectTo($backUrl)->withCookie($test);
            }
        }
        else {
            $sanpham = sanpham::find($request->get('id'));
            $phantram = size::find($request->get('size'));
            $code_cookie = $request->cookie('code');
            $currentTime = Carbon::now();
            $user = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();
            if ($user != null) {
                $chitiethoadon = chitiethoadon::where('hoadon_id', $user->id)->get();

                foreach ($chitiethoadon as $chitiet) {
                    if ($chitiet->sanpham_id == $request->get('id') && $chitiet->size_id == $request['size']) {
                        if ($chitiet->soluong + $request['quantity'] > 10) {
                            Session::put('maxbanh','Bánh này đã đạt giới hạn số lượng!');
                            return redirect()->back();
                        } else {
                            $chitiet->soluong = $chitiet->soluong + $request['quantity'];
                            $total = ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantram->phantram / 100);
                            $chitiet->giatien = $chitiet->giatien + $total;
                            $chitiet->giabanh = $sanpham->giatien + $sanpham->giatien*($phantram->phantram / 100);
                            $chitiet->save();
                            return redirect()->back();
                        }
                    }
                }
                foreach ($chitiethoadon as $chitiet) {
                    if ($chitiet->sanpham_id != $request->get('id')&& $chitiet->size_id != $request->get('size')) {
                        $request = $request->all();
                        Chitiethoadon::create([
                            'soluong' => $request['quantity'],
                            'giabanh' => $sanpham->giatien + $sanpham->giatien*($phantram->phantram / 100),
                            'ghichu' => "",
                            'giatien' => ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantram->phantram / 100),
                            'hoadon_id' => $user->id,
                            'size_id' => $request['size'],
                            'sanpham_id' => $request['id']
                        ]);
                        $hd = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();

                        if ($hd != null) {
                            $chitiet2 =
                                chitiethoadon::where('hoadon_id', $hd->id)
                                    ->where('size_id', $request['size'])
                                    ->where('sanpham_id', $request['id'])
                                    ->get();
                            if ($chitiet2 != null)
                                foreach ($chitiet2 as $item) {
                                    Session::push('cate', $item);
                                }
                        }
                        return redirect()->back();
                    } else{
                        Chitiethoadon::create([
                            'soluong' => $request['quantity'],
                            'ghichu' => "",
                            'giabanh' => $sanpham->giatien + $sanpham->giatien*($phantram->phantram / 100),
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
                $codetest = $this->randHD();
                $code = 'HD' . '' . (string) ($hoadon->id + 1) . $codetest;
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
                    'giabanh' => $sanpham->giatien + $sanpham->giatien*($phantram->phantram / 100),
                    'giatien' => ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantram->phantram / 100),
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
                return response()->redirectTo($backUrl)->withCookie($test);
            }
        }
        return redirect()->route('shop');
    }

    public function checkout(Request $request)
    {
        $email = (string)Session::get('data')['email'];
        $currentTime = Carbon::now();
        if(Session::has('email')) Session::forget('email');
        if(Session::has('mahd')) Session::forget('mahd');
        if (auth()->user()) {
            $user = hoadon::where('users_id', auth()->user()->id)->where('trangthai', 0)->first();
            if ($user != Null) {
                $user->ngaylaphd = Carbon::createFromFormat('Y-m-d H:i:s', $currentTime)->format('Y-m-d');
                $user->tenkhachhang = Session::get('data')['tenkhachhang'];
                $user->sdtkhachhang = Session::get('data')['sdtkhachhang'];
                $user->diachigiaohang = Session::get('data')['diachigiaohang'];
                $user->ngaynhanhang = Carbon::createFromFormat('d-m-Y', Session::get('data')['date'])->format('Y-m-d');
                $user->hinhthucnhanhang = Session::get('data')['ship'];
                $user->phuongthucthanhtoan = 'Tiền Mặt';
                $user->trangthai = 1;
                $user->save();
                if(Session::has('info'))
                {
                    Session::forget('info');
                    Session::forget('total');
                }
                Session::put('info',$user);
                Session::put('total',Session::get('data')['total']);
                Cookie::forget('code');
                Session::forget('cate');
                Session::put('mahd',$user->id);
                Session::put('hd_ma',$user->mahd);
                Session::put('pttt','Tiền Mặt');
                return redirect()->route('sendemailpay',$email);
            }
        } else {
            $code_cookie = $request->cookie('code');
            $currentTime = Carbon::now();
            $user = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();
            if ($user != Null) {
                $user->ngaylaphd = Carbon::createFromFormat('Y-m-d H:i:s', $currentTime)->format('Y-m-d');
                $user->tenkhachhang = Session::get('data')['tenkhachhang'];
                $user->sdtkhachhang = Session::get('data')['sdtkhachhang'];
                $user->diachigiaohang = Session::get('data')['diachigiaohang'];
                $user->ngaynhanhang = Carbon::createFromFormat('d-m-Y', Session::get('data')['date'])->format('Y-m-d');
                $user->hinhthucnhanhang = Session::get('data')['ship'];
                $user->phuongthucthanhtoan = 'Tiền Mặt';
                $user->trangthai = 1;
                $user->save();
                $request->cookie('code');
                if(Session::has('info'))
                {
                    Session::forget('info');
                    Session::forget('total');
                }
                Session::put('info',$user);
                Session::put('total',Session::get('data')['total']);
                Cookie::forget('code');
                Session::forget('cate');
                Session::put('mahd',$user->id);
                Session::put('hd_ma',$user->mahd);
                Session::put('pttt','Tiền Mặt');
                return redirect()->route('sendemailpay',$email);
            }
        }

    }

    public function updateqty($id, Request $request)
    {
        if (auth()->user() == null) {
            $code_cookie = $request->cookie('code');
            $hoadon = hoadon::where('mahd', $code_cookie)->first();
            $chitiettrung = chitiethoadon::where('hoadon_id', $hoadon->id)->get();
        } else {
            $hoadon = hoadon::where('users_id', auth()->user()->id)->where('trangthai', 0)->first();
            $chitiettrung = chitiethoadon::where('hoadon_id', $hoadon->id)->get();
        }
        $chitiet = chitiethoadon::find($id);
        $sanpham = sanpham::find($chitiet->sanpham_id);
        $phantrams = size::find($request->get('size_id'));
        if ($chitiet != null)
        {

            if ($chitiet->size_id != $request->get('size_id'))
            {
                foreach ($chitiettrung as $trung)
                {

                    if ($trung->sanpham_id == $chitiet->sanpham_id && $trung->size_id == $request->get('size_id'))
                    {

                        if ($request->get('quantity') + $trung->soluong > 10)
                        {
                            Session::put('maxcart','Bánh này đã vượt quá giới hạn số lượng 10 cái, vui lòng điều chỉnh lại số lượng!');
                            return redirect()->back();
                        } else {
                            $giusl = $request->get('quantity');
                            $giughichu = $request->get('ghichu');
                            $idsp = $chitiet->sanpham_id;
                            $timchitiet = chitiethoadon::where('sanpham_id', $idsp)
                                ->where('hoadon_id', $hoadon->id)->where('size_id', $request->get('size_id'))->first();
                            $timchitiet->soluong = $timchitiet->soluong + $giusl;
                            $timchitiet->giabanh = $sanpham->giatien+ $sanpham->giatien*($phantrams->phantram / 100);
                            $timchitiet->giatien = ($sanpham->giatien * ($timchitiet->soluong + $giusl)) + ($sanpham->giatien * ($timchitiet->soluong + $giusl)) * ($phantrams->phantram / 100);
                            $timchitiet->ghichu = $timchitiet->ghichu . "\n" . (string) $giughichu;
                            $timchitiet->save();
                            $chitiet->delete();
                        }
                    }
                }
                Session::forget('cate');
                $chitiet2 =
                    chitiethoadon::where('hoadon_id', $hoadon->id)
                        ->get();
                if ($chitiet2 != null)
                    foreach ($chitiet2 as $item) {
                        Session::push('cate', $item);
                    }
            }
            $chitiet->soluong = $request->get('quantity');
            $chitiet->size_id = $request->get('size_id');
            $chitiet->giabanh = $sanpham->giatien+ $sanpham->giatien*($phantrams->phantram / 100);
            $chitiet->giatien = ($sanpham->giatien * $request['quantity']) + ($sanpham->giatien * $request['quantity']) * ($phantrams->phantram / 100);
            $chitiet->ghichu = $request->get('ghichu');
            $chitiet->save();
            return redirect()->back();
        }
    }
}
