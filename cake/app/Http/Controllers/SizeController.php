<?php

namespace App\Http\Controllers;

use App\Models\size;
use App\Http\Requests\StoresizeRequest;
use App\Http\Requests\UpdatesizeRequest;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lsSize = Size::all();
        return view('pages.admin.size.index', ['lsSize'=> $lsSize]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresizeRequest $request)
    {
        Size::create([
            'tensize'=> $request['tensize'],
            'phantram'=> $request['phantram'],
        ]);
        return redirect()->route('size.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if($id){
            $size = size::find($id);
            if($size){
                return view('pages.admin.size.edit',['size'=> $size,
                ]);
            }
            return redirect()->back();
        }

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesizeRequest $request, $id)
    {
        $size = Size::find($id);
        $size->tensize = $request->get('tensize');
        $size->phantram= $request->get('phantram');
       
        $size->save();
        return redirect()->back()->with('status','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $size = Size::find($id);
        if($size){
            $size->delete();
        return redirect()->back();
         }
    }
}