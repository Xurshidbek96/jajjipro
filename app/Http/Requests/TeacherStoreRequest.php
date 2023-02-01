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
            'name' => 'required|max:60|min:30',
            'profession' => 'required|max:30'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'F.I.SH kiritilishi shart',
            'name.min' => 'F.I.SH eng kamida 30 ta belgidan iborat bo`lsin',
            'name.max' => 'F.I.SH 60 ta belgidan oshmasin',
            'profession.required' => 'Kasb maydoni to`ldirilsin',
            'profession.max' => 'Kasb maydoni 30 ta belgidan oshmasin'
        ];
    }
}
