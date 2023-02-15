<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Hashing\BcryptHasher;

class RegisterUser extends Controller
{   //création d'un compte utilisateur


    public function Form()
    {
        return view('register');
    }

    public function registre(Request $request)
    {
        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->pseudo = $request->pseudo;
        $user->password = Hash::make($request->password);
        $user->renit= $request->renit;
        $user->email= $request->email;
        $user->save();

        session()->flash('etat', 'User added');

        Auth::login($user);

        return redirect(RouteServiceProvider::MESSAGE);

    }
}


