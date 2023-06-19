<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreregisterRequest;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => [
                'required', 'min:3'
            ],
            'email'=>['required','unique:users'],
            'password' => [
                'required', 'confirmed', 'min:6','max:16'
            ]
            ],
        [
            'name.required' => 'Họ tên không được bỏ trống',
            'email.unique' =>'Email này đã được sử dụng',
            'email.required' => 'Email không được bỏ trống',
            'password.required' => 'Mật khẩu không được bỏ trống',
            'password.confirmed' => 'Mật khẩu nhập lại không chính xác',
            'password.min' => 'Mật khẩu phải dài hơn 6 kí tự',
            'password.max' => 'Mật khẩu phải ngắn hơn 16 kí tự',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'tenkhachhang' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'diachi'=>$data['address'],
            'sdt'=>$data['phone'],
            'loai' => 0,
            'trangthai'=>1
        ]);
    }
}
