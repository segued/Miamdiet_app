<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Gestionnaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\GestionnaireRequest;

class GestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gestionnaires = Gestionnaire::all();
        return view('Administration.gestionnaire.index', compact('gestionnaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Administration.gestionnaire.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $gestionnaire = new gestionnaire();
            $gestionnaire->nom = $request->nom;
            $gestionnaire->prenom = $request->prenom;
            $gestionnaire->email = $request->email;
            $gestionnaire->profil = 'gestionaire';
            $gestionnaire->numero = $request->numero;
            $gestionnaire->password = Hash::make('1234567890');
            $gestionnaire->confirmationpassword = Hash::make('1234567890');
            $gestionnaire->save() ;
            return redirect()->route('gestionnaire.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $gestionnaire = Gestionnaire::find($id);
        return view('Administration.gestionnaire.show', compact('gestionnaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $gestionnaire = Gestionnaire::findOrFail($id);
        return view('Administration.gestionnaire.edit', compact('gestionnaire'));
    }


    public function update(Request $request, $id)
    {
        //
        $gestionnaire = Gestionnaire::find($id);
        $gestionnaire->nom = $request->nom;
        $gestionnaire->prenom = $request->prenom;
        $gestionnaire->email = $request->email;
        $gestionnaire->profil = 'gestionaire';
        $gestionnaire->numero = $request->numero;
        $gestionnaire->password = Hash::make('1234567890');
        $gestionnaire->confirmationpassword = Hash::make('1234567890');
        $gestionnaire->update();
        return redirect()->route('gestionnaire.index')->with('success','gestionnaire modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $gestionnaire = Gestionnaire::find($id);
        $gestionnaire->delete();
        return redirect()->route('gestionnaire.index')->with('success','gestionnaire supprimé avec succès');
    }
}
