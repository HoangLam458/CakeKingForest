<?php

namespace App\Http\Controllers;

use App\Models\loaisanpham;
use App\Models\sanpham;
use App\Http\Requests\StoresanphamRequest;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Request;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loaisanpham = loaisanpham::all();
       
        $lsSanpham = Sanpham::simplePaginate(10);
        return view('pages.admin.sanpham.index', [ 'loaisanpham'=> $loaisanpham,'lsSanpham'=> $lsSanpham]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $loaisanpham = loaisanpham::all();
        return view('pages.admin.sanpham.create', ['loaisanpham'=> $loaisanpham]);
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
                return view('pages.admin.sanpham.detail',['loaisanpham'=> $loaisanpham,
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
                return view('pages.admin.sanpham.edit',['loaisanpham'=> $loaisanpham,
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
         if($request ->hasFile('image'))
         {
            $destination ='images/'.$sanpham->hinhanh;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
             $file = $request->file('image');
             $extension =$file->getClientOriginalExtension();
             $filename =time().'.'.$extension;
             $file->move('images/',$filename);
             $sanpham->hinhanh = $filename;
         }
         $sanpham->save();
         return redirect()->back()->with('status','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $sanpham = sanpham::find($id);
        if($sanpham){
            $sanpham->delete();
        return redirect()->back();
         }
    }
}