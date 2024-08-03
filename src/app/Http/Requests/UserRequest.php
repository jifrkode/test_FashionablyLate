<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email:strict,dns|max:255|unique:users',
            'password' => 'required|string|min:3',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '名前は文字列である必要があります',
            'name.max' => '名前は255文字以内で入力してください',
            
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスは文字列である必要があります',
            'email.max' => 'メールアドレスは255文字以内で入力してください',
            'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
            'email.unique' => 'このメールアドレスは既に使用されています',
            
            'password.required' => 'パスワードを入力してください',
            'password.string' => 'パスワードは文字列である必要があります',
            'password.min' => 'パスワードは少なくとも3文字以上である必要があります',
        ];
    }
}
