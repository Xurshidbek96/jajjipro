<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryStoreRequest extends FormRequest
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
            'img' => 'required|mimes:png,jpg,|max:3000',
        ];
    }

    public function messages()
    {
        return [
            'img.required' => 'Rasm kitirish shart',
            'img.mimes' => 'Rasm png va jpg formatda bo`lishi kerak',
            'img.max' => 'Kiritilgan rasm 3000 kb dan oshmasligi kerak',
        ];
    }
}
