<?php

namespace App\Http\Controllers\Admin\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('Client.userinterface.about');
    }
}
