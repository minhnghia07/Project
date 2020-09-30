<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'name'  => 'required|unique:users|min:3|max:10',
            'email' => 'required|unique:users',
            
            'gender' => 'required',
            'address' => 'required',
            'district' => 'required',
            'city' => 'required',
            'phone' => 'required|max:10';
        ];
    }
    public function messages()
    {
        'name.required' => 'Username is not allowed to be blank',
        'name.unique' => 'Username is not allowed to match',
        'name.min' => 'Username is not allowed to be less than 3 characters',
        'name.max' => 'Username is not allowed more than 10 characters',
        'email.required' => 'Email is not allowed to be blank',
        'email.unique' => 'Email is not allowed to match',
        'gender.required' => 'Gender is not allowed to be blank',
        'address.required' => 'Address details are not allowed to be blank',
        'district.required' => 'Street name is not allowed to be left blank',
        'city.required' => 'City name is not allowed to be left blank',
        'phone.required' => 'Phone number is not allowed to be blank',
        'phone.max' => 'Phone number must not exceed 11 characters',

    }
}
