<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WinStoreRequest extends FormRequest
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
            'name'=>'required',
            'title'=>'min:20|required',
            'img' => 'mimes:png,jpg|max:2048'
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'yutuq nomi',
            'title'=>'ta`rif',
            'img' => 'Rasm'
        ];
    }
}
