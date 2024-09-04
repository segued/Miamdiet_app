<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\Livre;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $livres = Livre::all();
        return view('Administration.book.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Administration.book.create');
    }

    // public function store(Request $request){
    //     dd('OK');
    // }

    public function store(Request $request)
    {
        $livre = new Livre([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'description' => $request->description,
        ]);
        $imageBaselink = '/images/produit/';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = (string) Str::uuid() . "." . strtolower($extension);
            $file->storeAs('public/images/produit/', $filename);

            $livre->image = $imageBaselink . '' . $filename;
            $livre->save();

            return redirect()->route('book.index')->with('success', 'Le livre  a été enregistré avec succès.');
        } else {
            return redirect()->back()->with('error_msg', 'Veuillez sélectionner une image.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $livre = Livre::findOrFail($id);
        return view('Administration.book.show', compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $livre = Livre::findOrFail($id);
        return view('Administration.book.show', compact('livre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $imageBaselink = '/images/livre/';
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $nouveauNomFichier = (string) Str::uuid() . "." . strtolower($extension);
            $file->storeAs('public/images/livre/', $nouveauNomFichier);

            $livre = Livre::findOrFail($id);

            $livre->title = $request->title;
            $livre->prix = $request->input('prix');
            $livre->description = $request->input('description');
            $livre->image = $imageBaselink . '' . $nouveauNomFichier;

            $livre->update();
            return redirect()->route('book.index')->with('success', 'Le livre a été modifier avec succès.');
        } else {
            return redirect()->back()->with('error_msg', 'Veuillez sélectionner une image.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livre  = Livre::find($id);
        $livre->delete();
        return redirect()->route('book.index')->with('success', 'Le livre a bien été supprimé');
    }
}
