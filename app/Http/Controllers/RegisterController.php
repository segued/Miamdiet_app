<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RessetpasswordRequest;

class RegisterController extends Controller
{



    public function userlist()
    {
        $users =User::all();
        return view('auth.register', compact('users'));
    }

    public function create (RegisterRequest $request)
    {
            //dd($request->nom,);
            $user = new user();
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->email = $request->email;
            $user->numero = $request->numero;
            $user->profil = 'user';
            $user->password = Hash::make($request->password);
            $user->confirmationpassword = Hash::make($request->password);
            $user->save();
            return redirect()->route('login')->with('success','Utilisateur enregistré avec succès');
    }

}
