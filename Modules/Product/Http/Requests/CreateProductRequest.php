<?php

namespace Modules\Product\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateProductRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'product_name' => 'required',
            'price' => 'required|digits_between:0,99999999999',
        ];
    }

    public function translationRules()
    {
        return [];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'product_name.required' => trans('products::products.validation.product required'),
            'price.required' => trans('products::products.validation.price required'),
            'price.digits_between' => trans('products::products.validation.price between'),

        ];
    }

    public function translationMessages()
    {
        return [];
    }
}
