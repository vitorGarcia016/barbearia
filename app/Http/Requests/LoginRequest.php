<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "email" => "required|email|max:255",
            "password" => "required|min:6|max:30"
        ];
    }

    public function messages()
    {
        return [
            "email.required" => "O campo 'Email' é obrigatório",
            "email.email" => "Email informado não é válido",
            "email.max" => "O Email deve ter no máximo :max caracteres",
            "password.required" => "O campo 'Senha' é obrigatório",
            "password.max" => "A senha deve ter no máximo :max caracteres",
            "password.min" => "A senha deve ter no mínimo :min caracteres"

        ];
    }
}
