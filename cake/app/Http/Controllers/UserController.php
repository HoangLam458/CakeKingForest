<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $lsUsers = User::all();
        return view('pages.admin.accounts.index', ['lsUsers'=> $lsUsers]);
    }
    public function homepage()
    {
        $count = 0;
        if(auth()->user()==null)
        {
            $hd = hoadon::where('user_id',null)->where('trangthai',0)->first();
            $cthd = chitiethoadon::where('hoadon_id',$hd->id);
            foreach($cthd as $item)
            {
                $count = $count + $item->soluong;
            }
            return view('pages.layout',[
                'count'=>$count
            ]);
        }
        else
        {
            $hd = hoadon::where('user_id',Auth::user()->id)->where('trangthai',0)->first();
            $cthd = chitiethoadon::where('hoadon_id',$hd->id);
            foreach($cthd as $item)
            {
                $count = $count + $item->soluong;
            }
            return view('pages.layout',[
                'count'=>$count
            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(Request $request)
    {
        return view('pages.admin.accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user =new User;
        $user-> tenkhachhang = $request->input('name');
        $user->email = $request->input('email');
        $user-> password = Hash::make($request->input('password'));
        $user-> diachi = $request->input('address');
        $user-> sdt = $request->input('phone');
        $user-> loai = 1;
        $user->trangthai =1;
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if($id){
            $user = User::find($id);
            if($user){
                return view('pages.admin.accounts.details',[
                    'user'=>$user
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
            $user = User::find($id);
            if($user){
                return view('pages.admin.accounts.edit',[
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
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if($request->get('password') != null){
            $user->password = bcrypt($request->get('password'));
        }
         $user->sdt = $request->get('phone');
         $user->diachi= $request->get('address');
         $user->tenkhachhang = $request->get('fullname');

         $user->save();

         return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user){
            $user->delete();
        return redirect()->back();
         }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('cake');
    }
    public function profile($id)
    {
        $user = User::find($id);
        $cart = hoadon::where('users_id',$id)->where('trangthai','<>',0)->get();
        return view('pages.user.profile',[
            'user'=>$user, 'cart'=>$cart
        ]);
    }
    public function User_update(Request $request, $id)
    {
        $user = User::find($id);
         $user->sdt = $request->get('phone');
         $user->diachi= $request->get('address');
         $user->tenkhachhang = $request->get('fullname');

         $user->save();

         return redirect()->route('trang-ca-nhan',$id);
    }

}
