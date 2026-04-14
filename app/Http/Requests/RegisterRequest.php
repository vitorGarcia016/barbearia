<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "name" => "required|string|min:10|max:100",
            "cpf" => "required|string|min:11|max:11",
            "email" => "required|email|max:255",
            "birthdate" => "required|date|before:today|after: " . Carbon::now()->subYear(100)->format("Y-m-d"),
            "password" => "required|min:6|max:30|confirmed",
            "password_confirmation" => "required"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "O nome é obrigatório.",
            "name.string" => "O nome deve ser um texto válido.",
            "name.min" => "O nome deve ter no mínimo :min caracteres.",
            "name.max" => "O nome deve ter no máximo :max caracteres.",

            
            "cpf.required" => "O CPF é obrigatório.",
            "cpf.string" => "O CPF deve ser um texto válido.",
            "cpf.min" => "O CPF deve ter :min dígitos.",
            "cpf.max" => "O CPF deve ter :max dígitos.",
            "cpf.cpf" => "O CPF informado é inválido.",

            
            "email.required" => "O email é obrigatório.",
            "email.email" => "Informe um email válido.",
            "email.max" => "O email deve ter no máximo :max caracteres.",

            
            "birthdate.required" => "A data de nascimento é obrigatória.",
            "birthdate.date" => "Informe uma data válida.",
            "birthdate.before" => "A data de nascimento deve ser anterior a hoje.",
            "birthdate.after" => "Informe uma data válida.",

            
            "password.required" => "A senha é obrigatória.",
            "password.min" => "A senha deve ter no mínimo :min caracteres.",
            "password.max" => "A senha deve ter no máximo :max caracteres.",
            "password.confirmed" => "As senhas não coincidem.",

            
            "password_confirmation.required" => "A confirmação de senha é obrigatória."
            
        ];
    }
}
