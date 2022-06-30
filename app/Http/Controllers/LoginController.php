<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller{
    
    public function accedi(){
        if(Session::get('user_id')){
            return redirect('homepage');
        }
        //Validazione dati
        if(strlen(request('username'))==0 || strlen(request('password'))==0){
            Session::put('error', 'campi_vuoti');
            return redirect('login')->withInput();
        }
        $user = User::where('username', request('username'))->first();
        if(!$user || !password_verify(request('password'), $user->password)){ //se l'utente non esiste o se non mi da vero password_verify
            Session::put('error', 'wrong');
            return redirect('login')->withInput();
        }
        //Login
        Session::put('user_id', $user->id);
        //redirect alla home
        return redirect('homepage');
    }

    public function login_form(){
        if(Session::get('user_id')){
            return redirect('homepage');
        }
        $error = Session::get('error'); //se abbiamo un errore lo registriamo qui e lo dimentichiamo con la ::forget
        Session::forget('error'); //elimina una variabile della sessione
        return view('login')->with('error', $error)->with('csrf_token', csrf_token());
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
}

?>