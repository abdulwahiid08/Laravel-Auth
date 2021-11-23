<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
                 // karena username dan email tidak boleh sama maka kita membuat validasi unique:namaTabel,fieldTable
            'inputName' => ['required', 'string', 'min: 3'],
            'inputEmail' => ['required', 'unique:users,email', 'email'],
            'inputPassword' => ['required', 'min: 6'],
            'inputUsername' => ['required', 'unique:users,username', 'alpha_num', 'min:8', 'max:20']
        ];
    }
}
