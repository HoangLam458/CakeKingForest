<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Http\Requests\StorehoadonRequest;
use App\Http\Requests\UpdatehoadonRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

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
        $lsInD = DB::table('chitiethoadons')->join('sanphams', 'sanpham_id', '=', 'sanphams.id')
            ->join('hoadons', 'hoadon_id', '=', 'hoadons.id')->join('sizes', 'size_id', '=', 'sizes.id')
            ->where('hoadon_id', $id)
            ->select('*', 'sanphams.tensp as tensanpham', 'sizes.tensize as s_name','sanphams.hinhanh as img')->get();
        $user = Hoadon::where('id', $id)->get();
        return view('pages.admin.invoice.details', [], [
            'lsInD' => $lsInD,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hoadon $hoadon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehoadonRequest $request, hoadon $hoadon)
    {
        //
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


}
