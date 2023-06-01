<?php

namespace App\Http\Controllers;
use App\Models\hoadon;
use Illuminate\Support\Facades\DB;

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
}
