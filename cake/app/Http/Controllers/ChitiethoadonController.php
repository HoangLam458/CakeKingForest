<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Http\Requests\StorechitiethoadonRequest;
use App\Http\Requests\UpdatechitiethoadonRequest;
use App\Models\hoadon;

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
    public function update(UpdatechitiethoadonRequest $request, chitiethoadon $chitiethoadon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user1 = hoadon::where('users_id', auth()->user()->id)->where('trangthai', 0)->first();


        $cart = chitiethoadon::find($id);
        if($cart){
            $cart->delete();
            $item = chitiethoadon::where('hoadon_id',$user1->id)->first();
            if($item == null)
            {
                $user1->delete();
                return redirect()->back();
            }
            return redirect()->back();
         }
    }
}
