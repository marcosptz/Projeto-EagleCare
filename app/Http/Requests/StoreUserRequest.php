<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'profile' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.unique' => 'O email informado já está em uso',
            'profile.required' => 'O campo tipo de usuário é obrigatório',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'A senha precisa ter pelo menos 8 caracteres',
            'password.confirmed' => 'As senhas não coincidem',
            'password_confirmation.required' => 'Digite a confirmação da senha',
            // 'password_confirmation.confirmed' => 'A confirmação da senha precisa ser igual a senha',
            'password_confirmation.min' => 'A senha precisa ter pelo menos 8 caracteres',
        ];
    }
}
