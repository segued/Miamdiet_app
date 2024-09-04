<?php

namespace App\Http\Controllers\Admin\Produit;
use App\Models\Categorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategorieRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('Administration.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Administration.category.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorieRequest $request)
    {
        //
        $categorie=new categorie();
        $categorie->libelle=$request->libelle;
        $categorie->save();
        return redirect()->route('category.index')->with('success','categorie enregistrer avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $categorie = Categorie::findOrFail($id);
        return view('Administration.category.show', compact('categorie'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $categorie = Categorie::findOrFail($id);
        return view('Administration.category.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $categorie = Categorie::find($id);
        $categorie->libelle = $request->libelle;
        $categorie->update();
        return redirect()->route('category.index')->with('success','categorie modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->route('category.index')->with('success','categorie supprimé avec succès');
    }
}
