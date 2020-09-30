<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
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
            'name'     => 'required|unique:users|max:20',
            'email'    => 'required|unique:users',
            'password' => 'required|min:6',
            'role_id'  => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'Tên người dùng không được phép để trống',
            'name.unique'       => 'Tên người dùng không được phép trùng',
            'name.max'          => 'Tên người dùng không được quá 20 kí tự',
            'email.required'    => 'Email không được phép để trống',
            'email.unique'      => 'Email không được phép trùng',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min'      => 'Mật khẩu không được dưới 6 kí tự',
            'role_id.required'  => 'Vai trò không được để trống',

        ];
    }
}
