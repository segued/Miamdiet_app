<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $temoignage = Temoignage::all();
        return view('Client.userinterface.index', compact('temoignage'));
    }

}
