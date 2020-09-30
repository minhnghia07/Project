<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'     => 'required|unique:users|min:3|max:10',
            'email'    => 'required|unique:users',
            'password' => 'required|min:6',
            're_pass'  => 'required|same:password',
            'birthday' => 'required',
            'gender'   => 'required',
            'address'  => 'required',
            'district' => 'required',
            'city'     => 'required',
            'CMTND'    => 'required|max:10',
            'phone'    => 'required|max:11',

        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'Tên người dùng không được phép để trống',
            'name.unique'       => 'Tên người dùng không được phép trùng',
            'name.min'          => 'Tên người dùng không được phép dưới 3 kí tự',
            'name.max'          => 'Tên người dùng không được phép trên 10 kí tự',
            'email.required'    => 'Email không được phép để trống',
            'email.unique'      => 'Email không được phép trùng',
            'password.required' => 'Mật khẩu không được phép để trống',
            'password.min'      => 'Mật khẩu không được phép dưới 6 kí tự',
            're_pass.same'      => 'Không trùng với mật khẩu bạn đã nhập bên trên',
            're_pass.required'  => 'Xác thực mật khẩu không được để trống',
            'birthday.required' => 'Ngày sinh không được phép để trống',
            'gender.required'   => 'Giới tính không được phép để trống',
            'address.required'  => 'Chi tiết địa chỉ không được phép để trống',
            'district.required' => 'Tên phố phường không được phép để trống',
            'city.required'     => 'Tên thành phố không được phép để trống',
            'CMTND.required'    => 'Số chứng minh thư nhân dân không được phép để trống',
            'CMTND.max'         => 'Số chứng minh thư nhân dân tối đa là 10 kí tự',
            'phone.required'    => 'Số điện thoại không được phép để trống',
            'phone.max'         => 'Số điện thoại không được phép quá 11 kí tự',
        ];
    }
}
