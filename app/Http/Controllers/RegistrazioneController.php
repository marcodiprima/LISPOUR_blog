<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegistrazioneController extends Controller{

    public function registrati(){
        if(Session::get('user_id')){
            return redirect('homepage');
        }
        //Validazione dati
        if(strlen(request('username'))==0 || strlen(request('password'))==0){
            Session::put('error', 'campi_vuoti');
            return redirect('registrazione')->withInput();
        }else if(User::where('username', request('username'))->first()){
            Session::put('error', 'utente_esistente');
            return redirect('registrazione')->withInput();
        }

        $request = request();
        if($this->contaErrori($request) === 0) {
            //Creazione utente
            $user = new User();
            $user->username = request('username');
            $user->password = password_hash(request('password'), PASSWORD_BCRYPT);
            $user->nome = request('nome');
            $user->cognome = request('cognome');
            $user->email = request('email');
            $user->save();
            if($user){
                //Login - impostiamo una variabile di sessione in modo che se quell'utente esiste ritorna l'id
                Session::put('user_id', $user->id);
                return redirect('homepage');
            }else {
                return redirect('registrazione')->withInput();
            }
        }else
            return redirect('registrazione')->withInput();
    }

    private function contaErrori($data) {
        $error = array();
        
        # USERNAME
        // Controlla che l'username rispetti il pattern specificato
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data['username'])) {
            $error[] = "Username non valido";
        } else {
            $username = User::where('username', $data['username'])->first();
            if ($username !== null) {
                $error[] = "Username già utilizzato";
            }
        }
        # PASSWORD
        if (strlen($data["password"]) < 8) {
            $error[] = "Caratteri password insufficienti";
        } 
        # EMAIL
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = User::where('email', $data['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }
        }

        return count($error);
    }

    public function checkUsername($query) {
        $exist = User::where('username', $query)->exists(); //ritorna un booleano
        return ['exists' => $exist]; //torniamo exists
    }

    public function checkEmail($query) {
        $exist = User::where('email', $query)->exists();
        return ['exists' => $exist];
    }

    public function regi_form(){
        if(Session::get('user_id')){
            return redirect('homepage');
        }
        $error = Session::get('error'); //se abbiamo un errore lo registriamo qui e lo dimentichiamo con la ::forget
        Session::forget('error'); //elimina una variabile della sessione
        return view('registrazione')->with('error', $error);
    }
}



?>