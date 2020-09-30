<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleAddRequest extends FormRequest
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
            'name'=>'required|unique:roles',
            'display_name'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'Tên vai trò không được phép để trống',
            'name.unique'       => 'Tên vai trò không được phép trùng',
            'display_name.required'    => 'Mô tả không được phép để trống'        
        ];
    }
}
