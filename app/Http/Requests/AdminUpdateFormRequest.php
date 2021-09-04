<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminUpdateFormRequest extends FormRequest
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
            'email'=> [
                'required', 
                'email',
                Rule::unique('giao_vus')->ignore($this->admin_manager)
            ],
            'phone'=> [
                'required', 
                'regex:/^[0-9]{10}$/',
                Rule::unique('giao_vus')->ignore($this->admin_manager)
            ],
            'dia_chi'=>'required',
            'gioi_tinh'=>'required',
            'role'=>'required',
        ];
    }
}
