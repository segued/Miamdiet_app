<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommandeRequest extends FormRequest
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
            'user_id' => 'required|exists:clients,id',
            'produit_id' => 'required|exists:produits,id',
            'prix' => 'required|integer|min:1',
            'montant' => 'required|integer',
            'adresse_livraison' => 'required',
            'methode_paiement' => 'required',
            'statut_paiement' => 'required',
            ];

    }
}
