<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{

    public function index(){

        $produits = Produit::all();
        $categories = Categorie::all();
        return view('Client.userinterface.shop', compact('produits','categories'));
    }

}
