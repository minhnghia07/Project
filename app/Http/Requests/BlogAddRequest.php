<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogAddRequest extends FormRequest
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
            'link_image' => 'required',
            'title'      => 'required',
            'contents'   => 'required',
            'status'     => 'required'

        ];
    }
    public function messages()
    {
        return [
            'link_image.required' => 'Link ảnh không được phép để trống',
            'title.required'      => 'Tiêu đề không được phép để trống',
            'contents.required'   => 'Nội dung không được phép để trống',
            'status.required'     => 'Trạng thái không được để trống'

        ];
    }
}
