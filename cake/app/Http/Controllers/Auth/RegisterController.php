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
            'name' => ['required', 'min:7','max:50'],
            'phone'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:10|max:10',
            'email'=>['required','unique:users'],
            'password' => ['required', 'min:6','max:16','confirmed'],
            'address'=>['required','min:10','max:255'],
            ],
        [
            'name.required'=>'Họ tên không được bỏ trống',
            'name.min'=>'Độ dài họ tên tối thiểu 7 kí tự',
            'name.max'=>'Độ dài họ tên tối đa 50 kí tự',
            'email.unique' =>'Email này đã được sử dụng',
            'email.required' => 'Email không được bỏ trống',
            'password.confirmed' => 'Mật khẩu nhập lại không chính xác',
            'password.required' => 'Mật khẩu không được bỏ trống',
            'password.min' => 'Độ dài mật khẩu tối thiểu 6 kí tự',
            'password.max' => 'Độ dài mật khẩu tối đa 16 kí tự',
            'address.required'=>'Địa chỉ không được bỏ trống',
            'address.min'=>'Độ dài địa chỉ tối thiểu 10 kí tự',
            'address.max'=>'Độ dài địa chỉ tối đa 255 kí tự',
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
