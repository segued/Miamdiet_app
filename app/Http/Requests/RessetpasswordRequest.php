<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RessetpasswordRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
            'confirmationpassword' => 'required',
        ];
    }

    public function message(){
        return [
            'email.required' => 'Veuillez saisir votre email',
            'email.email' => 'Veuillez saisir un email valide',
            'password.required' => 'Veuillez saisir votre mot de passe',
            'confirmationpassword.required' => 'Veuillez saisir votre mot de passe',
            ];
    }
}
