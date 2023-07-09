<?php

namespace App\Http\Controllers;

use App\Models\Lienhe;
use App\Http\Requests\StoreLienheRequest;
use App\Http\Requests\UpdateLienheRequest;
use App\Models\loaisanpham;
use Illuminate\Support\Facades\Session;

class LienheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = loaisanpham::all();
        if(Session::pull('sendct')==1){
            alert()->success('Thông báo', 'Đã gửi email liên hệ đến admin');
        }
        return view('pages.user.contact',[
            'category'=>$category
        ]);
    }
    public function admin_index()
    {
        $contact = Lienhe::all();
       return view('pages.admin.contacts.index',[
        'contact'=>$contact
       ]);
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
    public function store(StoreLienheRequest $request)
    {
        Lienhe::create([
            'tenkhachhang'=> $request['ht'],
            'tieude'=> $request['td'],
            'noidung'=>$request['nd'],
            'email'=>$request['em'],
            'trangthai'=>0
        ]);
        Session::put('contact',$request->all());
        return redirect()->route('sendcontact');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contact = Lienhe::where('id',$id)->first();
        if($contact->trangthai == 0)
        {
            $contact->trangthai = 1;
            $contact->save();
        }
        return view('pages.admin.contacts.details',[
         'contact'=>$contact
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lienhe $lienhe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLienheRequest $request, Lienhe $lienhe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Lienhe::find($id)->first();
        $item->delete();
        return redirect()->back();
    }
}
