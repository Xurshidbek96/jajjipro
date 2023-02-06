<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupStoreRequest extends FormRequest
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
            'name_uz' => 'required',
            'age' => 'required',
            'seat' => 'numeric',
            'img' =>'mimes:png,jpg,svg|max:2048'
        ];
    }

    public function messages(){
        return[
            'name_uz.required' => 'Guruh nomi to`ldirilsin',
            'age.required' => 'Yosh kiritilishi shart !',
            'img.mimes' => 'fayl turlari png, jgp, svg bo`lishi kerak !',
            'img.max' => 'fayl hajmi 2048 kb dan yuqori ',
            'seat' => 'joylar soni faqat raqam kiritilsin !'
        ];

    }
}
