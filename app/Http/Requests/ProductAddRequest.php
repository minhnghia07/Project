<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'name_product'         => 'required|unique:products|max:255|min:5',
            'link'         => 'required',
            'price'        => 'required',
            'category_id'  => 'required',

        ];
    }
    public function messages()
    {
        return [
            'name_product.required'         => 'Tên sản phẩm không được phép để trống',
            'name_product.unique'           => 'Tên sản phẩm không được trùng',
            'name_product.max'              => 'Tên sản phẩm không được phép quá 255 kí tự',
            'name_product.min'              => 'Tên sản phẩm không được phép dưới 5 kí tự',
            'price.required'        => 'Giá sản phẩm không được để trống',
            'link.required'         => 'Link ảnh sản phẩm không được phép không nhập',
            'category_id.required'  => 'Danh mục sản phẩm không được phép để trống',
        ];
    }
}
