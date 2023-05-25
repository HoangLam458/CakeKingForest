<?php

namespace App\Http\Controllers;

use App\Models\loaisanpham;
use App\Http\Requests\StoreloaisanphamRequest;
use App\Http\Requests\UpdateloaisanphamRequest;
use Illuminate\Http\Request;

class LoaisanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lsUsers = Loaisanpham::all();
        return view('pages.admin.catagory.index', ['lsUsers'=> $lsUsers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tenloaisp'=>'unique:loaisanphams',
        ]);
        $request = $request->all();
        Loaisanpham::create([
            'tenloaisp'=> $request['name'],
            'trangthai'=> 1
        ]);

        return redirect()->route('catagory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(loaisanpham $loaisanpham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if($id){
            $user = Loaisanpham::find($id);
            if($user){
                return view('pages.admin.catagory.edit',[
                    'staff'=>$user
                ]);
            }
            return redirect()->back();
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateloaisanphamRequest $request, loaisanpham $loaisanpham)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(loaisanpham $loaisanpham)
    {
        //
    }
}