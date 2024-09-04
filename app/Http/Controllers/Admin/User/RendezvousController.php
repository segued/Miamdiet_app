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



    public function planifierRdv($id){
        $user = Auth::user();
        $creneau_id = $id;
        return view('Client.userinterface.rendezvous', compact('user', 'creneau_id' ));
    }

    public function store(Request $request){
        $user = Auth::user();

        $rdv = new Rdv();
        $rdv->user_id = $user->id;
        $rdv->creneau_id = $request->creneau_id;
        $rdv->ville = $request->ville;
        $rdv->heure = $request->heure;
        $rdv->adress = $request->adress;
        $rdv->phone = $request->phone;
        $rdv->description = $request->description;
        $rdv->save();
       return redirect()->route('service')->with('success', 'Le rendez-vous a été enregistré avec succès.');
    }
}
