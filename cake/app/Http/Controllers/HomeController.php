<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorehoadonRequest;
use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Models\sanpham;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
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
    {   $user1 = hoadon::where('users_id', $id)->where('trangthai',0)->first();
        $user = hoadon::where('users_id', $id)->get();
        $total = 0;
        $lsInD = DB::table('chitiethoadons')->join('sanphams', 'sanpham_id', '=', 'sanphams.id')
            ->join('hoadons', 'hoadon_id', '=', 'hoadons.id')->join('sizes', 'size_id', '=', 'sizes.id')
            ->where('hoadon_id', $user1->id)->where('hoadons.trangthai',0)
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
    public function add_to_cart(Request $request, $id){
        $user = hoadon::where('users_id', $id)->where('trangthai',0)->first();
        $taikhoan=User::find($id);
        $sanpham = sanpham::find($request->get('id'));
        if($user !=null ){
            $chitiethoadon = chitiethoadon::where('hoadon_id', $user->id)->get();
            foreach ($chitiethoadon as $chitiet)
            {
                if($chitiet->sanpham_id == $request->get('id') && $chitiet->size_id == 1){
                    $chitiet->soluong = $chitiet->soluong + 1;
                    $chitiet->giatien = $chitiet->giatien + $sanpham->giatien;
                    $chitiet->save();
                    return redirect()->back();
                }                   
                }
                foreach ($chitiethoadon as $chitiet)
                {
                if($chitiet->sanpham_id != $request->get('id')){
                    $request = $request->all();
                    Chitiethoadon::create([
                        'soluong'=>1,
                        'ghichu'=> "",
                        'giatien'=> $sanpham->giatien,
                        'hoadon_id'=>$user->id,
                        'size_id'=>1,
                        'sanpham_id'=> $request['id']
                    ]);
                    return redirect()->back();
                }
            }
        } else{
            $hoadon = hoadon::orderBy('id', 'DESC')->first();
            $code =   'HD'.''.(string)($hoadon->id + 1);
            $currentTime = Carbon::now();
             hoadon::create([
                            'mahd'=>$code,
                            'ngaylaphd'=> $currentTime,
                            'tenkhachhang'=> $taikhoan->tenkhachhang,
                            'diachigiaohang'=>$taikhoan->diachi,
                            'sdtkhachhang'=>$taikhoan->sdt,
                            'hinhthucnhanhang'=>"",
                            'ngaynhanhang'=>null,
                            'phuongthucthanhtoan'=>"",
                            'trangthai'=>0,
                            'users_id'=>$id
            ]);
             $user2 = hoadon::where('users_id', $id)->where('trangthai',0)->first();
                $request = $request->all();
                Chitiethoadon::create([
                    'soluong'=>1,
                    'ghichu'=> "",
                    'giatien'=> $sanpham->giatien,
                    'hoadon_id'=>$user2->id,
                    'size_id'=>1,
                    'sanpham_id'=> $request['id']
                ]);
            return redirect()->route('shop');
        }
        return redirect()->route('cake');
    }
}
