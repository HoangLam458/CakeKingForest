<?php

namespace App\Http\Controllers;

use App\Models\taikhoan;
use Illuminate\Http\Request;
use App\Http\Requests\StoretaikhoanRequest;
use App\Http\Requests\UpdatetaikhoanRequest;


class TaikhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $lsUsers = TaiKhoan::all();
    //     return view('pages.admin.accounts.index', ['lsUsers'=> $lsUsers]);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */

    // public function create(Request $request)
    // {
    //     return view('pages.admin.accounts.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $this->validate($request,[
    //         'email'=>'unique:taikhoans',
    //     ]);

    //     $request = $request->all();
    //     $request['password'] = bcrypt($request['password']);

    //     TaiKhoan::create([
    //         'tenkhachhang'=> $request['name'],
    //         'sdt'=> $request['phone'],
    //         'email'=> $request['email'],
    //         'diachi'=> $request['address'],
    //         'matkhau'=>  $request['password'],
    //         'loai'=> 1
    //     ]);

    //     return redirect()->route('user.index');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show($id)
    // {
    //     if($id){
    //         $user = TaiKhoan::find($id);
    //         if($user){
    //             return view('pages.admin.accounts.details',[
    //                 'taikhoan'=>$user
    //             ]);
    //         }
    //         return redirect()->back();
    //     }

    //     return redirect()->back();
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit($id)
    // {
    //     if($id){
    //         $user = TaiKhoan::find($id);
    //         if($user){
    //             return view('pages.admin.accounts.edit',[
    //                 'staff'=>$user
    //             ]);
    //         }
    //         return redirect()->back();
    //     }
    //     return redirect()->back();
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, $id)
    // {
    //     $user = TaiKhoan::find($id);
    //     if($request->get('password') != null){
    //         $user->matkhau = bcrypt($request->get('password'));
    //     }
    //      $user->sdt = $request->get('phone');
    //      $user->diachi= $request->get('address');
    //      $user->tenkhachhang = $request->get('fullname');

    //      $user->save();

    //      return redirect()->route('user.index');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy($id)
    // {
    //     $user = TaiKhoan::find($id);
    //     if($user){
    //         $user->delete();
    //     return redirect()->back();
    //      }
    // }
}
