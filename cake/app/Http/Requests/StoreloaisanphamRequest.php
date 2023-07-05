<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreloaisanphamRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'tenloaisp'=>['required','unique:loaisanphams,tenloaisp','max:255','min:10'],
        ];
    }
    public function messages(){
        return [
            'tenloaisp.unique'=>'Tên loại bánh đã được sử dụng',
            'tenloaisp.required'=>'Tên loại bánh không được bỏ trống',
            'tenloaisp.max'=>'Độ dài tên loại bánh tối đa 255 kí tự',
            'tenloaisp.min'=>'Độ dài tên tên loại bánh tối thiểu 10 kí tự',
        ];
    }
}
