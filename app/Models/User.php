<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Auth;


class User extends Model
{
    protected $table="users";
    protected $primaryKey = "id";
    protected $autoIncrement = false;

    // Questi campi non verranno ritornati da query sul database, in modo che i contenuti protetti non vengono mostrati o 
    // per non ritornare cose che non verranno attivamente utilizzate lato client
    protected $nascondi = [
        'email', 'password'
    ];

    // Permette di inserire nel db solo questi campi e nient'altro 
    protected $insert = [
        'id', 'username', 'password', 'nome', 'cognome', 'email'
    ];

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }
}

?>