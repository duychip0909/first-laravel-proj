<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationRequest extends FormRequest
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
            'username' => 'required|alpha_num|min:6|max:15',
            'email' => 'required|email|email:rfc,dns',
            'password' => 'required|min:8'
        ];
    }

    public function messages() {
        return [
            'username.required' => 'Bạn chưa nhập tên tài khoản',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'email.required' => 'Bạn chưa nhập email'
        ];
    }
}
