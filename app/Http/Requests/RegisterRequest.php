<?php

namespace App\Http\Requests;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'nom' => 'required',
            'prenom' => 'required',
            'numero' => 'required',
            'password' => 'required|min:8',
            'confirmationpassword' => 'required|min:8',
        ];
    }

    public function messages(){
        return [
            'email.required'=>'L\'email est requis',
            'email.email'=>"Le format de l'email n'est pas valide",
            'password.required'=>'Le mot de passe est requis',
            'password.min'=>'Le mot de passe doit contenir au minimun 8 caractère',
            'confirmationpassword.required'=>'Le mot de passe est requis',
            'confirmationpassword.min'=>'Le mot de passe doit contenir au minimun 8 caractère',
            'nom.required'=>'Le nom est requis',
            'numero.required'=>'Le numero de telephone est requis',
            'prenom.required'=>'Le prenom est requis',
        ];
    }
}
