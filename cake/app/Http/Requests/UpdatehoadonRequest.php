<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatehoadonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules():array
    {
        return [
            //
            'tenkhachhang'=>['required'],
            'diachigiaohang'=>['required'],
            'sdtkhachhang'=>['required'],
        ];
    }
    public function messages(){
        return [
            'tenkhachhang.required'=>'Chưa nhập họ tên',
            'diachigiaohang.required'=>'Chưa nhập địa chỉ',
            'sdtkhachhang.required'=>'Chưa nhập số điện thoại',
        ];
    }
}
