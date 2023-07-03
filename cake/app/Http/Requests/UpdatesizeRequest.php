<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatesizeRequest extends FormRequest
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
            'tensize'=>'required|min:5|max:25|unique:sizes,tensize,'.$this->id,
            'phantram'=>'required|numeric|between:0,30',
        ];
    }
    public function messages(){
        return [
            'tensize.unique'=>'Tên size đã được sử dụng',
            'tensize.required'=>'Tên size không được bỏ trống',
            'tensize.max'=>'Độ dài tên size tối đa 25 kí tự',
            'tensize.min'=>'Độ dài tên size tối thiểu 5 kí tự',
            'phantram.required'=>'Phần trăm không được bỏ trống',
            'phantram.between'=>'Phần trăm phải tối thiểu 0% và tối đa 30%',
        ];
    } 
}
