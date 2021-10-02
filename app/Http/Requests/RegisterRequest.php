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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:7',
        ];
    }

    public function messages() {
        return [
            'name.required' => '名前は必ず入力してください',
            'email.required' => 'メールアドレスは必ず入力してください',
            'password.required' => 'パスワードは必ず入力してください',
            'password.confirmed' => 'パスワードが一致しません',
            'password.min' => 'パスワードは7文字以上入力してください',
        ];
    }
}
