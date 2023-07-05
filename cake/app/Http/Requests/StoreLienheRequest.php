<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLienheRequest extends FormRequest
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
            'em'=>['required'],
            'ht'=>['required','max:50'],
            'td'=>['required','min:15','max:50'],
            'nd' => ['required', 'min:50'],
        ];
        
    }
    public function messages(){
        return [
            'em.required'=>'Email không được bỏ trống',
            'ht.required'=>'Họ tên không được bỏ trống',
            'ht.max'=>'Độ dài họ tên tối đa 50 kí tự',
            'nd.required'=>'Nội dung không được bỏ trống',
            'nd.min'=>'Độ dài nội dung tối thiểu 50 kí tự',
            'td.required' => 'Tiêu đề không được bỏ trống',
            'td.min' => 'Độ dài tiêu đề tối thiểu 15 kí tự',
            'td.max' => 'Độ dài tiêu đề tối đa 50 kí tự',
        ];
    }
}
