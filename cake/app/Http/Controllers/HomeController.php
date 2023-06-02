<?php

namespace App\Http\Controllers;
use App\Models\hoadon;
use App\Http\Requests\StorehoadonRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.admin.dashboard');
    }

        public function cart($id)
    {
        $user = hoadon::where('users_id', $id)->get();
        $total = 0;
        $lsInD = DB::table('chitiethoadons')->join('sanphams', 'sanpham_id', '=', 'sanphams.id')
            ->join('hoadons', 'hoadon_id', '=', 'hoadons.id')->join('sizes', 'size_id', '=', 'sizes.id')
            ->where('hoadon_id', $id)->where('hoadons.trangthai',0)
            ->select('*','chitiethoadons.giatien as thanhtien', 'sanphams.tensp as tensanpham','sanphams.giatien as giaban', 'sizes.tensize as s_name','sanphams.hinhanh as img')->get();

        foreach ($lsInD as $in)
        {
            $total = $total + $in->thanhtien;
        }
        return view('pages.user.cart', [], [
            'lsInD' => $lsInD,
            'user' => $user,
            'total'=>$total
        ]);

    }
    public function checkout($id, Request $request)
    {
        $user = hoadon::where('users_id', $id)->where('trangthai',0)->first();
        if($user != Null)
        {
        $user->tenkhachhang = $request->get('name');
        $user->sdtkhachhang = $request->get('phone');
        $user->diachigiaohang= $request->get('address');
        $user->ngaynhanhang = $request->get('date');
        $user->hinhthucnhanhang = $request->get('ship');
        $user->phuongthucthanhtoan = "Tiền Mặt";
        $user->trangthai = 1;
        $user->save();
        return redirect()->route('cart',$id);
        }
        else return view('homeuser');


    }

}
