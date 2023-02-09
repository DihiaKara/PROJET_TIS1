<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authentification extends Controller
{
    public function Form()
    {
        return view('login');
    }

    // action d'authentification
    public function login(Request $request)
    {

        $request->validate([
            'pseudo' => 'required|string',
            'password' => 'required|string'
        ]);


        $credentials = ['pseudo' => $request->input('pseudo'), 'password' => $request->input('password')];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $request->session()->flash('etat', 'Login successful');

            if (Auth::user()->isAdmin()) {
                return redirect()->intended('/admin');
            }

            if (Auth::user()->isstudent()) {
                return redirect()->intended('/student');
            }

            return redirect()->intended('/message');
        }

        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);

    }

    //action de déconnexion
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}

