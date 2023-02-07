<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_uz' =>'required|max:20',
        ];
    }

    public function messages()
    {
        return [
            'name_uz.required' =>'Kategoriya nomi kiritilishi shart',
            'name_uz.max' =>'Kategoriya 20 ta belgidan oshmasin',
        ];
    }
}
