<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Like;
use Session;


class ProfiloController extends Controller{

    public function profile(){
        if(!Session::get('user_id')){
            return redirect('login');
        }
        $user = User::find(Session::get('user_id'));

        $post_number = Like::where('user_id', Session::get('user_id'))->count();

        $tit_pia = Like::where('user_id', Session::get('user_id'))->get();

        return view('profilo')
        ->with('username', $user->username)
        ->with('nome', $user->nome)
        ->with('cognome', $user->cognome)
        ->with('numero', $post_number)
        ->with('titolo', $tit_pia);

    }

}

?>