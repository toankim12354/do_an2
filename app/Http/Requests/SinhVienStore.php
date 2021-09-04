<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SinhVienStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ten'=>'required',
            'birthday'=>'required',
            'email'=>'required|email|unique:sinh_viens',
            'phone'=> [
                'required', 
                'regex:/^[0-9]{10}$/',
                 Rule::unique('sinh_viens')->ignore($this->sinhvien_manager)
            ],
            'dia_chi'=>'required',
            'gioi_tinh'=>'required',
            'ghi_chu'=>'required',
            'lop_id'=>'required',
            //
        ];
    }
}
