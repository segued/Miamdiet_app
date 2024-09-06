<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Temoignage;

class TemoignageController extends Controller
{

    public function index()
    {
        $temoignages = Temoignage::all();
        return view('Administration.temoignage.index', compact('temoignages'));
    }


    public function create()
    {
        //
        $temoignages = Temoignage::all();
        return view('Administration.temoignage.create', compact('temoignages'));
    }

    public function store(Request $request)
    {
        $temoignage = new Temoignage([
            'description' => $request->description,
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $temoignage->image = 'images/' . $imageName;
        $temoignage->save();

        return redirect()->route('temoignage.index')->with('success', 'Le témoignage  a été enregistré avec succès.');
    }

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

        $temoignage = new Temoignage([
            'description' => $request->description,
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $temoignage->image = 'images/' . $imageName;
        $temoignage->update();

            return redirect()->route('temoignage.index')->with('success', 'Le témoignage  a été enregistré avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $temoignage = Temoignage::find($id);
        $temoignage->delete();
        return view('Administration.temoignage.index')->with('success', 'Le temoignage a bien été supprimé');
    }
}
