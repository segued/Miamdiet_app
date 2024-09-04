<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Temoignage;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $temoignages = Temoignage::all();
        return view('Administration.temoignage.index', compact('temoignages'));
    }


    public function create()
    {
        //
        $temoignages = Temoignage::all();
        return view('Administration.temoignage.create', compact('temoignages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     dd($request);

    //     //
    //     $imageBaselink = '/images/temoignage/';
    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $filename = $file->getClientOriginalName();
    //         $extension = $file->getClientOriginalExtension();
    //         $nouveauNomFichier = (string) Str::uuid() . "." . strtolower($extension);
    //         $file->storeAs('public/images/temoignage/', $nouveauNomFichier);

    //         $temoignage = new Temoignage;

    //         $temoignage->description = $request->input('description');
    //         $temoignage->image=$imageBaselink.''.$nouveauNomFichier;
    //         $temoignage->save();

    //         return redirect()->route('temoignage.index')->with('success', 'Le temoignage a été enregistré avec succès.');
    //     } else {
    //         return redirect()->back()->with('error_msg', 'Veuillez sélectionner une image.');
    //     }
    //             dd($request);

    // }


    public function store(Request $request)
    {
        $temoignage = new Temoignage([
            'description' => $request->description,
        ]);
        $imageBaselink = '/images/produit/';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = (string) Str::uuid() . "." . strtolower($extension);
            $file->storeAs('public/images/produit/', $filename);

            $temoignage->image = $imageBaselink . '' . $filename;
            $temoignage->save();

            return redirect()->route('temoignage.index')->with('success', 'Le témoignage  a été enregistré avec succès.');
        } else {
            return redirect()->back()->with('error_msg', 'Veuillez sélectionner une image.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $temoignage = Temoignage::findOrFail($id);
        return view('Administration.temoignage.show', compact('temoignage'));
    }


    public function edit($id)
    {
        //
        $temoignage = Temoignage::find($id);
        return view('Administration.temoignage.edit', compact('temoignage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $temoignage = new Temoignage([
            'description' => $request->description,
        ]);
        $imageBaselink = '/images/produit/';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = (string) Str::uuid() . "." . strtolower($extension);
            $file->storeAs('public/images/produit/', $filename);

            $temoignage->image = $imageBaselink . '' . $filename;
            $temoignage->update();

            return redirect()->route('temoignage.index')->with('success', 'Le témoignage  a été enregistré avec succès.');
        } else {
            return redirect()->back()->with('error_msg', 'Veuillez sélectionner une image.');
        }    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $temoignage = Temoignage::find($id);
        $temoignage->delete();
        return redirect()->route('temoignage.index')->with('success','Le temoignage a bien été supprimé');
    }
}
