<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Http\Requests\StorehoadonRequest;
use App\Http\Requests\UpdatehoadonRequest;
use App\Models\loaisanpham;
use App\Models\sanpham;
use App\Models\size;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HoadonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $lsHoaDon = HoaDon::where('trangthai','<>', 0)->orderBy('mahd')->get();
        return view('pages.admin.invoice.index', ['lsHoaDon'=> $lsHoaDon]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorehoadonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $total = 0;
        $lsInD = DB::table('chitiethoadons')->join('sanphams', 'sanpham_id', '=', 'sanphams.id')
            ->join('hoadons', 'hoadon_id', '=', 'hoadons.id')->join('sizes', 'size_id', '=', 'sizes.id')
            ->where('hoadon_id', $id)
            ->select('*','chitiethoadons.giatien as thanhtien', 'sanphams.tensp as tensanpham','sanphams.giatien as giaban', 'sizes.tensize as s_name','sanphams.hinhanh as img')->get();
        $user = Hoadon::where('id', $id)->get();
        foreach ($lsInD as $in)
        {
            $total = $total + $in->thanhtien;
        }
        return view('pages.admin.invoice.details', [], [
            'lsInD' => $lsInD,
            'user' => $user,
            'total'=>$total
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hoadon $hoadon)
    {
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = hoadon::find($id);
         $user->sdtkhachhang = $request->get('phone');
         $user->diachigiaohang= $request->get('address');
         $user->tenkhachhang = $request->get('fullname');
         $user->ngaynhanhang = $request->get('date');

         $user->save();

         return redirect()->route('invoice.detail',$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hoadon $hoadon)
    {
        //
    }
    public function update_status_success($id,Request $request)
    {
        $request = $request->all();

            $hd = Hoadon::find($id);
            $hd->trangthai = 4;
            $hd->save();
            return redirect()->back();
    }
    public function update_status_ship($id,Request $request)
    {
        $request = $request->all();

            $hd = Hoadon::find($id);
            $hd->trangthai = 3;
            $hd->save();
            return redirect()->back();


    }
    public function update_status_cancel($id,Request $request)
    {
        $request = $request->all();

            $hd = Hoadon::find($id);
            $hd->trangthai = 5;
            $hd->save();
            return redirect()->back();


    }
    public function update_status_approved($id,Request $request)
    {
        $request = $request->all();

            $hd = Hoadon::find($id);
            $hd->trangthai = 2;
            $hd->save();
            return redirect()->back();


    }

    public function donhang(Request $request,){
        $category = loaisanpham::all();
        $hd = hoadon::where('mahd',$request->get('search'))->where('trangthai','<>', 0)->first();
        return view('pages.user.donhang',[
            'hd' => $hd,'category'=>$category
        ]);
    }
    public function searchdonhang(Request $request){
        $category = loaisanpham::all();
        $search = $request->get('search');
        // $hd = hoadon::where('trangthai','<>', 0)->Where('sdtkhachhang',$request->get('search'))
        // ->orWhere('mahd',$request->get('search'))->get();

        $hd = hoadon::where('trangthai','<>', 0)->where(function($query) use($search ) {
            $query->where('sdtkhachhang',$search)
                ->orWhere('mahd',$search);
        })->get();
        return view('pages.user.donhang',[
            'hd' => $hd,'category'=>$category
        ]);
    }
    public function chitietdonhang($idhd, Request $request){
        if(Session::has('path'))
        {
            $path = Session::get('path');
            $id_update = Session::get('hd_id');
            if( (string)$path[0] == "MOMOBKUN20180529")
            {
                $hd = hoadon::find($id_update[0]);
                $hd->trangthai = 2 ;
                $hd->phuongthucthanhtoan = 'MOMO';
                $hd->save();
                Session::forget('cate');
            }
        }


        $category = loaisanpham::all();
        $total = 0;
        $size = size::all();
        $lsInD = DB::table('chitiethoadons')->join('sanphams', 'sanpham_id', '=', 'sanphams.id')
            ->join('hoadons', 'hoadon_id', '=', 'hoadons.id')->join('sizes', 'size_id', '=', 'sizes.id')
            ->where('hoadon_id', $idhd)
            ->select('*','chitiethoadons.id as idchitiet','chitiethoadons.giatien as thanhtien', 'sizes.id as idsize','sanphams.tensp as tensanpham','sanphams.giatien as giaban', 'sizes.tensize as s_name','sanphams.hinhanh as img')->get();
        $mahd = Hoadon::where('id', $idhd)->first();
        foreach ($lsInD as $in)
        {
            $total = $total + $in->thanhtien;
        }
        return view('pages.user.chitietdonhang',
        ['size'=>$size, 'mahd'=>$mahd,
         'total'=>$total,'lsInD' =>$lsInD,'category'=>$category
        ]);
    }
    public function updateghichu($id, Request $request){
        $chitiet = chitiethoadon::find($id);
        if($chitiet){
            $chitiet->ghichu = $request->get('ghichu');
                $chitiet->save();
                return redirect()->back();
        }
        else
        return redirect()->back();
    }
    public function insertDB(Request $request)
    {
        dd($request->all());
        return redirect()->route('donhang');
    }
}
