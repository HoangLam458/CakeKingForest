<?php

namespace App\Http\Requests;

use App\Rules\CurrentPasswordCheckRule;
use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'old_password' => ['required', new CurrentPasswordCheckRule],
            'password' => ['required', 'min:6','max:16','confirmed', 'different:old_password'],
            'password_confirmation' => ['required']
        ];
    }
    public function messages(){
        return [
            'password.required'=>'Mật khẩu không được bỏ trống',
            'password.min' => 'Độ dài mật khẩu tối thiểu 6 kí tự',
            'password.max' => 'Độ dài mật khẩu tối đa 16 kí tự',
            'password.different' => 'Mật khẩu mới không được trùng với mật khẩu hiện tại',
            'password.confirmed' => 'Mật khẩu mới không trùng với mật khẩu xác nhận',
            'old_password.required'=>'Mật khẩu hiện tại không được bỏ trống',
            'old_password.new'=>'Mật khẩu hiện tại không được bỏ trống',
            'password_confirmation.required'=>'Mật khẩu xác nhận không được bỏ trống',
        ];
    }
    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'old_password' => __('current password'),
        ];
    }
}
