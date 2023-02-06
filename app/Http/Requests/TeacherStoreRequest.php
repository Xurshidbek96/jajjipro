<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
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
            'name_uz' => 'required|max:60',
            'profession_uz' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name_uz.required' => 'F.I.SH kiritilishi shart',
            'name_uz.min' => 'F.I.SH eng kamida 30 ta belgidan iborat bo`lsin',
            'name_uz.max' => 'F.I.SH 60 ta belgidan oshmasin',
            'profession_uz.required' => 'Kasb maydoni to`ldirilsin',
            'profession_uz.max' => 'Kasb maydoni 30 ta belgidan oshmasin'
        ];
    }
}
