<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\Livre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LivreController extends Controller
{
    public function index()
    {
        $livre = Livre::all();
        return view ('Client.userinterface.livre', compact('livre'));
    }
}
