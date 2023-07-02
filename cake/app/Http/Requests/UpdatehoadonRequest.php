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
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules():array
    {
        return [
            'email'=>['required'],
            'tenkhachhang'=>['required','min:10','max:50'], 
            'diachigiaohang'=>['required','min:10','max:255'],
            'sdtkhachhang'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:10|max:10',
            'date'=> 'required'
        ];
    }
    public function messages(){
        return [
            'email.required'=>'Email không được bỏ trống',
            'tenkhachhang.required'=>'Họ tên không được bỏ trống',
            'tenkhachhang.min'=>'Độ dài họ tên tối thiểu 10 kí tự',
            'tenkhachhang.max'=>'Độ dài họ tên tối đa 50 kí tự',
            'diachigiaohang.required'=>'Địa chỉ không được bỏ trống',
            'diachigiaohang.min'=>'Độ dài địa chỉ tối thiểu 10 kí tự',
            'diachigiaohang.max'=>'Độ dài địa chỉ tối đa 255 kí tự',
            'sdtkhachhang.regex'=>'Sổ điện thoại không đúng định dạng',
            'sdtkhachhang.required'=>'Sổ điện thoại không được bỏ trống',
            'sdtkhachhang.min'=>'Sổ điện thoại phải 10 số',
            'sdtkhachhang.max'=>'Sổ điện thoại phải 10 số',
            'date.required'=>'Ngày nhận hàng không được bỏ trống',
        ];
    }
}
