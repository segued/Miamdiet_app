<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Models\Commande;
use App\Models\Panier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommandeRequest;
use App\Models\Rdv;

class CommandeController extends Controller
{

    public function index()
    {
        $commandes = Commande::all();
        return view('commande.index', compact('commandes'));
    }

    public function rendezvous()
    {
        $rendezvous = Rdv::all();
        return view('Administration.Rdv.index', compact('rendezvous'));
    }


    public function create()
    {
        $user = Auth::user();
        return view('commande.create', compact('user'));
    }

    public function procederpaiment($id){
        $user = Auth::user();
        $panier_id = $id;
        return view('Client.userinterface.checkout', compact('user','panier_id'));
    }

    public function store(Request $request ) {
        $user = Auth::user();

        $commande = new Commande();
        $commande->user_id = $user->id;
        $commande->panier_id = $request->panier_id;
        $commande->ville = $request->ville;
        $commande->adresse = $request->adresse;
        $commande->montant = $request->montant;
        $commande->numero_depot = $request->numero_depot;
        $commande->numero_transaction = $request->numero_transaction;
        $commande->save();

        $panier = Panier::find($request->panier_id);
    if ($panier) {
        $panier->statut = 'payer';
        $panier->save();
    }
        return redirect()->route('shop')->with('success', 'Commande ajoutée avec succès');

    }


    public function ValiderCommande(Request $request)
    {
        $user = Auth::user()->id;
        $panier = new Panier();
        $panier->user_id = $user;
        $panier->produit_id = json_encode($request->produit_id);
        $panier->nom = json_encode($request->noms);
        $panier->prix = json_encode($request->prix);
        $panier->quantite = json_encode($request->quantities);
        $panier->save();
        return redirect()->back()->with('success', 'Commande traitée avec succès !');
    }










    public function show($id)
    {
        $commande = Commande::find($id);
        return view('commande.show', compact('commande'));
    }



    public function edit($id)
    {
        $commande = Commande::find($id);
        return view('commande.edit', compact('commande'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nom' => 'required',
                'prenom' => 'required',
                'email' => 'required',
                'telephone' => 'required',
                'adresse' => 'required',
                'ville' => 'required',
                'pays' => 'required',
                'code_postal' => 'required',
                'date_commande' => 'required',
                'date_livraison' => 'required',
                'montant' => 'required',
                'status' => 'required',
                'paiement' => 'required',
                'produit_id' => 'required',
                'user_id' => 'required',
            ]
        );
        $commande = Commande::find($id);
        $commande->nom = $request->nom;
        $commande->prenom = $request->prenom;
        $commande->email = $request->email;
        $commande->telephone = $request->telephone;
        $commande->adresse = $request->adresse;
        $commande->ville = $request->ville;
        $commande->pays = $request->pays;
        $commande->code_postal = $request->code_postal;
        $commande->date_commande = $request->date_commande;
        $commande->date_livraison = $request->date_livraison;
        $commande->montant = $request->montant;
        $commande->status = $request->status;
        $commande->paiement = $request->paiement;
        $commande->produit_id = $request->produit_id;
        $commande->user_id = $request->user_id;
        $commande->save();
        return redirect()->route('commande.index')->with('success', 'Commande updated successfully');
    }


    public function destroy($id)
    {
        $commande = Commande::find($id);
        $commande->delete();
        return redirect()->route('commande.index')->with('success', 'Commande deleted successfully');
    }
}
