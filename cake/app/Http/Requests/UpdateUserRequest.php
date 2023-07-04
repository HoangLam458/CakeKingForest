<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * 
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
    public function rules(): array
    {
        return [
            'phone'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:10|max:10',
            'fullname'=>['required','max:50'],
            'address'=>['required','min:10','max:255'],
        ];
    }
    public function messages(){
        return [
            'phone.regex'=>'Sổ điện thoại không đúng định dạng',
            'phone.required'=>'Sổ điện thoại không được bỏ trống',
            'phone.min'=>'Sổ điện thoại phải 10 số',
            'phone.max'=>'Sổ điện thoại phải 10 số',
            'fullname.required'=>'Họ tên không được bỏ trống',
            'fullname.max'=>'Độ dài họ tên tối đa 50 kí tự',
            'address.required'=>'Địa chỉ không được bỏ trống',
            'address.min'=>'Độ dài địa chỉ tối thiểu 10 kí tự',
            'address.max'=>'Độ dài địa chỉ tối đa 255 kí tự',
        ];
    }
}
