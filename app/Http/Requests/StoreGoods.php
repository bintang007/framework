<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGoods extends FormRequest
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
            'itemCode' => 'required|numeric|unique:goods',
            'brand' => 'required|string',
            'color' => 'required|string',
            'size' => 'required|numeric',
            'price' => 'required|numeric',
        ];
    }
}
