<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreregisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'min:3'
            ],
            'email'=>['required','unique:users'],
            'password' => [
                $this->route()->user ? 'nullable' : 'required', 'confirmed', 'min:6','max:16'
            ]
        ];
    }
    public function messages(){
        return [
            'email.unique'=>'Email đã được sử dụng',
            'password.min'=>'Mật khẩu phải dài hơn 6 kí tự',
            'password.max'=>'Mật khẩu phải ngắn hơn 16 kí tự',
            'password.confirmed'=>'Nhập lại mật khẩu không trùng với mật khẩu',
        ];
    }
}
