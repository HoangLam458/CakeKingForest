<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatesanphamRequest extends FormRequest
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
            'tensp'=>'required|min:15|max:255|unique:sanphams,tensp,'.$this->id,
            'mota'=>['required','min:50'],
            'giatien'=> 'required|numeric|between:100000,2000000',
        ];
    }
    public function messages(){
        return [
            'tensp.unique'=>'Tên sản phẩm đã được sử dụng',
            'tensp.required'=>'Tên sản phẩm không được bỏ trống',
            'tensp.max'=>'Độ dài tên sản phẩm tối đa 255 kí tự',
            'tensp.min'=>'Độ dài tên sản phẩm tối thiểu 15 kí tự',
            'mota.required'=>'Mô tả không được bỏ trống',
            'mota.min'=>'Độ dài mô tả tối thiểu 50 kí tự',
            'giatien.required'=>'Giá tiền không được bỏ trống',
            'giatien.between'=>'Giá tiền phải tối thiểu 100.000 và tối đa 2.000.000',
        ];
    }
}
