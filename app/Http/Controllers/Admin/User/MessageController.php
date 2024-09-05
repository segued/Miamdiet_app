<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function index(){
        $messages = Message::all();
        return view('Administration.message.index', compact('messages'));
    }

    public function destroy($id){
        $message = Message::find($id);
        $message->delete();
        return  redirect()->route('message.index')->with('success','Le message a bien été supprimé');
    }




    public function store(Request $request)
    {
        $message = new Message();
        $message->nom = $request->nom;
        $message->prenom = $request->prenom;
        $message->objet = $request->objet;
        $message->message = $request->message;
        $message->save();
        return view('Client.userinterface.contact');
    }
}



