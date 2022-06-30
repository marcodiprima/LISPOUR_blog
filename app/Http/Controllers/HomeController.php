<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Session;

class HomeController extends Controller{

    public function index(){
        //Controllo di accesso
        if(!Session::get('user_id')){
            return redirect('login');
        }
        //Leggo l'username
        $user = User::find(Session::get('user_id'));
        return view('homepage')
        ->with('nome', $user->nome)
        ->with('cognome', $user->cognome);
    }

}

?>