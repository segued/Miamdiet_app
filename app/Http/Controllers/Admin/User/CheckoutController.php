<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Panier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index($id)
{
    $userId = Auth::user()->id;
    $panier = Panier::where('id', $id)->where('user_id', $userId)->first();

    if (!$panier) {
        return redirect()->route('mes.paniers')->with('error', 'Panier non trouvé.');
    }

    // Décode les données JSON
    $noms = json_decode($panier->nom, true);
    $prix = json_decode($panier->prix, true);
    $quantite = json_decode($panier->quantite, true);
    $id = json_decode($panier->id, true);

    return view('Client.userinterface.checkout', [
        'panier' => $panier,
        'noms' => $noms,
        'prix' => $prix,
        'quantite' => $quantite,
        'id' => $id,
    ]);
}


public function afficherPanier()
{
    $userId = Auth::user()->id;
    $paniers = Panier::where('user_id', $userId)
                    ->where('statut', 'impayer')
                    ->get();
    return view('Client.userinterface.order', [
        'paniers' => $paniers,
    ]);
}

}
