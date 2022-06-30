<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Auth;

class Like extends Model
{
    protected $table="likes";
    protected $primaryKey ='post_id';

    // Questi campi non verranno ritornati da query sul database, in modo che i contenuti protetti non vengono mostrati o 
    // per non ritornare cose che non verranno attivamente utilizzate lato client
    protected $nascondi = [
        'user_id'
    ];
    
    // Permette di inserire nel db solo questi campi e nient'altro 
    protected $fillable = [
        'user_id', 'titolo', 'image', 'post_id'
    ];

    public function users(){
        return $this->belongsTo('App\Models\like');
    }
}

?>