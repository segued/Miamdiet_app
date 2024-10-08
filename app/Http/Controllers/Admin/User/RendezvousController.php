<?php

namespace App\Http\Controllers\Admin\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Creneau;
use App\Models\Rdv;
use Illuminate\Http\Request;

class RendezvousController extends Controller
{
    //
    public function index(){
        $rdvs = Rdv::all();
        $creneau = Creneau::all();
        return view('Client.userinterface.rendezvous',compact('rdvs','creneau'));
    }



    public function planifierRdv(){
        $user = Auth::user();
        return view('Client.userinterface.rendezvous', compact('user' ));
    }

    public function store(Request $request){
        $user = Auth::user();

        $rdv = new Rdv();
        $rdv->user_id = $user->id;
        $rdv->date = $request->date;
        $rdv->heure = $request->heure;
        $rdv->ville = $request->ville;
        $rdv->adress = $request->adress;
        $rdv->numero_depot = $request->numero_depot;
        $rdv->numero_transaction = $request->numero_transaction;
        $rdv->description = $request->description;
        $rdv->save();
       return redirect()->route('service')->with('success', 'Le rendez-vous a été enregistré avec succès.');
    }
}
