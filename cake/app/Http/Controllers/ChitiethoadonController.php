<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Http\Requests\StorechitiethoadonRequest;
use App\Http\Requests\UpdatechitiethoadonRequest;
use App\Models\hoadon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class ChitiethoadonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorechitiethoadonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(chitiethoadon $chitiethoadon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chitiethoadon $chitiethoadon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = chitiethoadon::where('id',$id)->first();
        $item->ghichu = $request->get('ghichu');
        $item->save();
        return redirect()->back()->with('status','Cập nhật ghi chú thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request)
    {
        if (auth()->user() == null) {
            $cart = chitiethoadon::find($id);
            $code_cookie = $request->cookie('code');
            if ($cart) {
                $cart->delete();
                $user1 = hoadon::where('mahd', $code_cookie)->where('trangthai', 0)->first();
                $item = chitiethoadon::where('hoadon_id', $user1->id)->first();
                if ($item == null) {
                    $user1->delete();
                    Cookie::forget('code');
                    return redirect()->back();
                }
                Session::forget('cate');
                $chitiet =
                    chitiethoadon::where('hoadon_id', $user1->id)
                        ->get();
                if ($chitiet != null)
                    foreach ($chitiet as $item) {
                        Session::push('cate', $item);
                    }
                return redirect()->back();
            }
        } else {
            $user1 = hoadon::where('users_id', auth()->user()->id)->where('trangthai', 0)->first();
            $cart = chitiethoadon::find($id);
            if ($cart) {
                $cart->delete();
                $item = chitiethoadon::where('hoadon_id', $user1->id)->first();
                if ($item == null) {
                    $user1->delete();
                    Cookie::forget('code');
                    return redirect()->back();
                }
                Session::forget('cate');
                $chitiet =
                    chitiethoadon::where('hoadon_id', $user1->id)
                        ->get();
                if ($chitiet != null)
                    foreach ($chitiet as $item) {
                        Session::push('cate', $item);
                    }
                return redirect()->back();
            }
        }
    }
}
