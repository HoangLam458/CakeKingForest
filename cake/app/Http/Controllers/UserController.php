<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
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
        $lsUsers = User::orderBy('loai', 'DESC')->Paginate(10);

        return view('pages.admin.accounts.index', ['lsUsers' => $lsUsers]);
    }
    public function show_admin(Request $request)
    {
        $admin=$_GET['admin'];
        $user = User::where('loai',$admin)->Paginate(10)->withQueryString();
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
    public function store(StoreUserRequest $request)
    {
        $user = new User;
        $user->tenkhachhang = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->diachi = $request->input('address');
        $user->sdt = $request->input('phone');
        $user->loai = $request->get('admin');
        $user->trangthai = 1;
        $user->save();
        return view('pages.admin.accounts.create');
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
    public function update(UpdateuserRequest $request, $id)
    {
        $user = User::find($id);
        if ($request->get('password') != null) {
            $user->password = bcrypt($request->get('password'));
        }
        $user->sdt = $request->get('phone');
        $user->diachi = $request->get('address');
        $user->tenkhachhang = $request->get('fullname');
        $user->save();
        $user = User::find($id);
        return view('pages.admin.accounts.edit', [
            'staff' => $user
        ]);
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
        $cart = hoadon::where('users_id', $id)->where('trangthai', '<>', 0)->orderBy('ngaylaphd', 'DESC')->get();
        return view('pages.user.profile', [
            'user' => $user,
            'cart' => $cart,
            'category' => $category
        ]);
    }
    public function User_update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->sdt = $request->get('phone');
        $user->diachi = $request->get('address');
        $user->tenkhachhang = $request->get('fullname');
        $user->save();
        return redirect()->route('trang-ca-nhan', $id);
    }


}
