<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\MsgGenerals;
use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Auth;
use DB ;
use Carbon\Carbon;


class Users extends Controller
{
    //affichage des utilisateurs
    public function affichageMessageGrl(){
        $form=DB::table('msg_generals')->join('Users','msg_generals.id_emetteur','=','Users.id')
            ->select('Users.pseudo','msg_generals.message','msg_generals.time')->get();

        return view('canalGeneral',['form'=>$form]);
    }


    public function msgsave(Request $request){
        $id = Auth::id();
        $validated = $request->validate([
            'msg' => 'required|String|max:2000',
        ]);
        $msg = new MsgGenerals();
        $msg->message= $validated['msg'];
        $msg->id_emetteur = $id;
        $msg->save();

        $request->session()->flash('etat', 'message envoyé !');
        return redirect()->route('msgGeneral');

    }




// affichage des Etudiants
    public function affichageStudent(){
        $form = DB::table('users')->where('statut','Student')->paginate(9);
        return view('affichageStudent',['form'=>$form]);
    }


    public function adminvalidation(){
        $form=DB::table('users')->paginate(9);
        return view('validation',['form'=>$form]);
    }

    public function valid(Request $request)
    {
        $validated = $request->validate([
            'id' => 'bail|required|integer|gte:0|lte:120',
            'nom' => 'required|alpha|max:40',
            'prenom' => 'required|alpha|max:40',
            'statut' => 'required|alpha|max:7'
        ]);

        $user = User::findOrFail($validated['id']);
        $user->nom = $validated['nom'];
        $user->prenom = $validated['prenom'];
        $user->statut = $validated['statut'];

        $user->save();

        $request->session()->flash('etat', 'Validation effectuée !');
        return redirect()->route('validation');

    }

}


