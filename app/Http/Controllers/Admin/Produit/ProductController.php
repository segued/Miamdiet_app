<?php

namespace App\Http\Controllers\Admin\Produit;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProduitRequest;
use App\Http\Requests\CategorieRequest;

class ProductController extends Controller
{ public function index(){
    $produits = Produit::all();
    $totalproduits = Produit::all()->count();
    return view('Administration.produit.index', compact('produits','totalproduits'));
}


public function create(){
    $categories = Categorie::all();
    return view('Administration.produit.create', compact('categories'));
}


public function store(Request $request)
{
        $imageBaselink='/images/produit/';
        if ($request->hasFile('photo')) {
        $file= $request->file('photo');
        $filename =$file->getClientOriginalName();
        $extension =$file->getClientOriginalExtension();
        $nouveauNomFichier=(string) Str::uuid() . "." . strtolower($extension);
        $file->storeAs('public/images/produit/', $nouveauNomFichier);

        $produit = new Produit;

        $produit->nom = $request->nom;
        $produit->categorie_id = $request->input('categorie_id');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->photo=$imageBaselink.''.$nouveauNomFichier;
        $produit->save();

        return redirect()->route('produit.index')->with('success', 'Le produit a été enregistré avec succès.');
    }
    else {
return redirect()->back()->with('error_msg', 'Veuillez sélectionner une image.');
}

}


public function show($id)
{
    $produit = Produit::findOrFail($id);
    return view('Administration.produit.show', compact('produit'));
}



public function edit($id){
    $produit = Produit::find($id);
    $categories = Categorie::all();
    return view('Administration.produit.edit', compact('produit', 'categories'));
}

public function update(Request $request, $id)
{
    $lienImage = '/miamdiet/images/produit/';
    if ($request->hasFile('photo')) {
        $fichier = $request->file('photo');
        $extension = $fichier->getClientOriginalExtension();
        $nouveauNomFichier = (string) Str::uuid() . "." . strtolower($extension);
        $fichier->storeAs('public/miamdiet/images/produit/', $nouveauNomFichier);
    }
    $produit = Produit::findOrFail($id);
    $produit->nom = $request->nom;
    $produit->categorie_id = $request->input('categorie_id');
    $produit->prix = $request->input('prix');
    $produit->description = $request->input('description');
    if ($request->hasFile('photo')) {
        $produit->photo = $lienImage . $nouveauNomFichier;
    }
    $produit->update();
    return redirect()->route('produit.index')->with('success','Le produit a bien été modifié');
}

public function destroy($id){
    $produit = Produit::find($id);
    $produit->delete();
    return redirect()->route('produit.index')->with('success','Le produit a bien été supprimé');
}


public function produitparcategorie($id)
{
    $produits = Produit::where('categorie_id', $id)->get();
    $categorie = Categorie::find($id);
    return view('Client.userinterface.produitparcategorie', compact('produits','categorie'));
}

}
