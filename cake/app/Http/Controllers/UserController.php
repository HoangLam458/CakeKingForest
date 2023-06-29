<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Models\loaisanpham;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $lsUsers = User::all();
        return view('pages.admin.accounts.index', ['lsUsers' => $lsUsers]);
    }
    public function show_admin(Request $request)
    {
        $user = User::where('loai',$request->admin)->get();
        return view('pages.admin.accounts.index', ['lsUsers' => $user]);
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


        $check = User::where('email', $request->get('email'))->value('id');
        if ($check != Null) {
            alert()->warning('Thông báo', 'Email đã tồn tại');
            return view('pages.admin.accounts.create');
        }
        $user = new User;
        $user->tenkhachhang = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->diachi = $request->input('address');
        $user->sdt = $request->input('phone');
        $user->loai = $request->get('admin');
        $user->trangthai = 1;
        $user->save();
        $lsUsers = User::all();
        alert()->success('Thông báo', 'Tạo tài khoản mới thành công');
        return view('pages.admin.accounts.index', ['lsUsers' => $lsUsers]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if ($id) {
            $user = User::find($id);
            if ($user) {
                return view('pages.admin.accounts.details', [
                    'user' => $user
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
        if ($id) {
            $user = User::find($id);
            if ($user) {
                return view('pages.admin.accounts.edit', [
                    'staff' => $user
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
        if ($request->get('password') != null) {
            $user->password = bcrypt($request->get('password'));
        }
        $user->sdt = $request->get('phone');
        $user->diachi = $request->get('address');
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

        if ($user) {
            $invoice = hoadon::where('users_id', $user->id)->get();
            foreach ($invoice as $item) {
                $item->users_id = null;
                $item->save();
            }
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
        $category = loaisanpham::all();
        $user = User::find($id);
        $cart = hoadon::where('users_id', $id)->where('trangthai', '<>', 0)->get();
        return view('pages.user.profile', [
            'user' => $user,
            'cart' => $cart,
            'category' => $category
        ]);
    }
    public function User_update(Request $request, $id)
    {
        $user = User::find($id);
        $user->sdt = $request->get('phone');
        $user->diachi = $request->get('address');
        $user->tenkhachhang = $request->get('fullname');
        $user->save();
        return redirect()->route('trang-ca-nhan', $id);
    }


}
