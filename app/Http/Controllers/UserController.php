<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt([
            "email" => $request->email,
            "password" => $request->password
        ])){
            //dd(Auth::getUser());
            //die();            //$request->session()->regenerate();
            Auth::login(Auth::getUser());
            if(Auth::user()->role == 'Entreprise'){
                return  redirect('/manager/dashboard');           
            }
            else{
                return  redirect('/user/dashboard');
            }
            
            
        }else{
            return redirect()->back()->with('status', "Connexion echouée");
        }
    }


    
    public function register (Request $request){
        //verif validate
        //dd($request->all());

        if($request->password != $request->password_confirmation){
            dd(false);
        }else{
            User::create([
                "nom" => $request->nom,
                "prenom" => $request->prenom,
                "email" => $request->email,
                "telephone" => $request->telephone,
                "password"=> Hash::make($request->password),
                "role" => $request->role,
            ]);
            return redirect('/login');
        }

    }


    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    
}
