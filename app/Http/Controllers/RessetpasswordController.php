<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RessetpasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RessetpasswordController extends Controller
{
    public function index(){
        return view('auth.ressetpassword');
    }


    public function update (RessetpasswordRequest $request){
        $user = User::where('email', $request->email);
        $user->update([
                'password'=>Hash::make($request->password),
                'confirmationpassword'=>Hash::make($request->confirmationpassword)
        ]);
        return redirect()->route('login')->with('success','Mot de passe modifier');
    }
}
