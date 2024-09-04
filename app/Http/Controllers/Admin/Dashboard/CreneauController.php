<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Models\Creneau;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreneauController extends Controller
{

    public function index()
    {
            $creneaux = Creneau::all();
            return view('Creneau.index',compact('creneaux'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Creneau.create');
    }


    
    public function store(Request $request)
    {
        $creneau = new Creneau([
            'date' => $request->date,
            'debut' => $request->debut,
            'fin' => $request->fin,
            'statut' => $request->statut,
        ]);
        $creneau->save();
        return redirect()->route('creneau.index')->with('success', 'Creneau enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Creneau $creneau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $cToUpdate = Creneau::findOrFail($id);
        // $cToUpdate->heureDebut = Carbon::createFromFormat('H:i:s', $cToUpdate->heureDebut)->format('H:i');
        // $cToUpdate->heureFin = Carbon::createFromFormat('H:i:s', $cToUpdate->heureFin)->format('H:i');
        // // dd( $cToUpdate);
        return view('Creneau.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd( $request->heureDebut);
        $creneau = Creneau::findOrFail($id);
            $creneau->date = $request->date;
            $creneau->debut = $request->debut;
            $creneau->fin = $request->fin;
            $creneau->statut = $request->statut;
            $creneau->update();

        return redirect()->route('creneau.index')->with('success','Changements enregistrés avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $creneauToDestroy = Creneau::findOrFail($id);
        $creneauToDestroy->delete();
        return back()->with('success','Creneau supprimé avec succès');
    }

    // public function creneauDeleted()
    // {
    //     $creneauDeleteds = Creneau::onlyTrashed()->get();
    //     return view('Admin.Creneau.deleted',compact('creneauDeleteds'));
    // }

    // public function restoreCreneau($id)
    // {
    //     $creneauToRestore = Creneau::withTrashed()->findOrFail($id);
    //     $creneauToRestore->restore();
    //     return redirect()->route('creneau.index')->with('success','Creneau restauré avec succès');
    // }

    // public function deleteCreneau( $id)
    // {
    //     $creneauToDelete = Creneau::withTrashed()->find($id);
    //     $creneauToDelete->forceDelete();
    //     return back()->with('success','Creneau supprimé définitivement');
    // }
}
