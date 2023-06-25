<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users',
            'password' => 'required'
        ], [
            'email.exists' =>'Email không tồn tại',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator);
        }

         if(\Illuminate\Support\Facades\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
            ]))
        {
            $user=\Illuminate\Foundation\Auth\User::where('email', $request->email)->first();
            $request->session()->put('email', $user);
            if($user->loai==0){
                return redirect()->route('cake');
            }
            return redirect()->route('home');

        }
        Alert::error('Lỗi', 'Mật khẩu không đúng');
        return redirect()->back();
    }
}
