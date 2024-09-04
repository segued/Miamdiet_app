<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;

class SingleproduitController extends Controller
{
     public function index(){
        $produits = Produit::all();
        $categorie = Categorie::all();
        return view ('Client.userinterface.singleproduit', compact('produits', 'categorie'));
    }


    public function show($id){
        $produit = Produit::find($id);
        return view ('Client.userinterface.singleproduit', compact('produit'));
    }
}
