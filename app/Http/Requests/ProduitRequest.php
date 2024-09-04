<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'prix' => 'required|integer',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:png, jpg, jpeg,webp'
        ];
    }

    public function message()
    {
        [
            'nom.required'=> 'Le nom du produit est requis',
            'nom.string'=> 'Le nom du produit doit etre une chaine de caractère',
            'nom.max'=> 'Le nom du produit doit etre inferieure a 255 caracères',
            'prix.required'=> 'Le prix du produit est requis',
            'prix.integer'=> 'Le prix du produit doit etre un entier',
            'description.required'=> 'La description du produit est requis',
            'description.string'=> 'La description du produit doit etre une chaine de caractere',
            'photo.required'=>'l\image du produit est erquise',
            'photo.image'=>'l\image du produit doit etre de type image',
            'photo.mimes'=>'l\image du produit prend les extentions comme (png, jpg, jpeg, web)',

        ];
    }
}
