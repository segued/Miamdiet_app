<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function handle (AuthRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            if ($user->profil === 'admin') {
                return redirect()->route('dashboard')->with('success','Bienvenu ' .$user->nom.' ' .$user->prenom);
            }
            else if($user->profil === 'user') {
                return redirect()->route('accueil')->with('success','Bienvenu ' .$user->nom.' ' .$user->prenom);
            }
            else {
                return redirect()->back()->with('error_msg','Identifiants invalides');
            }
        }
        else {
            // L'authentification a échoué
            return redirect()->back()->with('error_msg','Identifiants invalides');
        }

    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
