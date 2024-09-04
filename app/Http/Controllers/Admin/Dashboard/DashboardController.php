<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Models\Rdv;
use App\Models\Panier;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(){

        $totalcategories = Categorie::all()->count();
        $totalproduits = Produit::all()->count();
        $totalcommande = Commande::all()->count();
        $totalrdv = Rdv::all()->count();
        return view('dashboard', compact('totalcategories', 'totalproduits','totalcommande','totalrdv'));
    }

    public function panier()
{
    $panier = Panier::all();
    return view('Administration.cart.index', compact('panier'));
}
}


