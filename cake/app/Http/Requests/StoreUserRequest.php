<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class StoreUserRequest extends FormRequest
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
            'email'=>['required','unique:users,email','regex:/(.+)@(.+)\.(.+)/i'],
            'phone'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:10|max:10',
            'name'=>['required','min:10','max:50'],
            'address'=>['required','min:10','max:255'],
            'password' => ['required', 'min:6','max:16'],
            'admin'=>['required']
        ];
        
    }
    public function messages(){
        return [
            'email.required'=>'Email không được bỏ trống',
            'email.unique'=>'Email đã được sử dụng',
            'email.regex'=>'Định dạng email không hợp lệ',
            'phone.regex'=>'Sổ điện thoại không đúng định dạng',
            'phone.required'=>'Sổ điện thoại không được bỏ trống',
            'phone.min'=>'Sổ điện thoại phải 10 số',
            'phone.max'=>'Sổ điện thoại phải 10 số',
            'name.required'=>'Họ tên không được bỏ trống',
            'name.min'=>'Độ tài họ tên tối thiểu 10 kí tự',
            'name.max'=>'Độ tài họ tên tối đa 50 kí tự',
            'address.required'=>'Địa chỉ không được bỏ trống',
            'address.min'=>'Độ tài địa chỉ tối thiểu 10 kí tự',
            'address.max'=>'Độ tài địa chỉ tối đa 255 kí tự',
            'password.required' => 'Mật khẩu không được bỏ trống',
            'password.min' => 'Độ dài mật khẩu tối thiểu hơn 6 kí tự',
            'password.max' => 'Độ dài mật khẩu tối đa 16 kí tự',
            'admin.required'=>'Chưa chọn chức vụ',
        ];
    }
}
