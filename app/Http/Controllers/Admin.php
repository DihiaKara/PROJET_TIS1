<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;
use App\Models\User ;
use App\Models\Formation ;
use Illuminate\Support\Facades\Auth;
use DB ;
use Carbon\Carbon;


class Admin extends Controller
{
    //affichage des utilisateurs
    public function affichageUser(){
        $form=DB::table('users')->paginate(9);
        return view('affichageUser',['form'=>$form]);
    }


// affichage des Etudiants
    public function affichageStudent(){
        $form = DB::table('users')->where('statut','Student')->paginate(9);
        return view('affichageStudent',['form'=>$form]);
    }


    public function adminvalidation(){
        $form=DB::table('users')
            ->where('statut','=','null')
            ->paginate(9);
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


