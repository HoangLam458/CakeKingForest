<?php

namespace App\Http\Controllers;

use App\Models\loaisanpham;
use App\Models\sanpham;
use App\Http\Requests\StoresanphamRequest;
use App\Http\Requests\UpdatesanphamRequest;
use Database\Factories\SanphamFactory;
use Symfony\Component\HttpFoundation\Request;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loaisanpham = loaisanpham::all();
        $lsSanpham = Sanpham::all();
        return view('pages.admin.sanphams.sanpham', ['loaisanpham'=> $loaisanpham,'lsSanpham'=> $lsSanpham]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $loaisanpham = loaisanpham::all();
        return view('pages.admin.sanphams.sanphamcreate', ['loaisanpham'=> $loaisanpham]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresanphamRequest $request)
    {
        $sanphams =new sanpham;
        $sanphams-> tensp = $request->input('tensp');
        $sanphams-> mota = $request->input('mota');
        $sanphams-> giatien = $request->input('giatien');
        $sanphams-> loaisanpham_id = $request->input('loaisanpham_id');
        $sanphams-> trangthai = 1;
        if($request ->hasFile('image'))
            {
                $file = $request->file('image');
                $extension =$file->getClientOriginalExtension();
                $filename =time().'.'.$extension;
                $file->move('images/',$filename);
                $sanphams->hinhanh = $filename;
            }
            $sanphams->save();
        return redirect()->route('sanpham.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if($id){
            $loaisanpham = loaisanpham::all();
            $sanpham = Sanpham::find($id);
            if($sanpham){
                return view('pages.admin.sanphams.sanphamdetail',['loaisanpham'=> $loaisanpham,
                    'sanpham'=>$sanpham
                ]);
            }
            return redirect()->back();
        }

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
   
        if($id){
            $sanpham = Sanpham::find($id);
            $loaisanpham = loaisanpham::all();
            if($sanpham){
                return view('pages.admin.sanphams.sanphamedit',['loaisanpham'=> $loaisanpham,
                    'sanpham'=>$sanpham
                ]);
            }
            return redirect()->back();
        }

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sanpham = Sanpham::find($id);
         $sanpham->tensp = $request->get('tensp');
         $sanpham->mota= $request->get('mota');
         $sanpham->giatien = $request->get('giatien');
         $sanpham->loaisanpham_id = $request->get('loaisanpham_id');
         $sanpham->save();

         return redirect()->route('sanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sanpham $sanpham)
    {
        //
    }
}