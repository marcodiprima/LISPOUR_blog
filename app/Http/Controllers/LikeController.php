<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Like;
use Session;

class LikeController extends Controller{

    public function add(){

        $user = User::find(Session::get('user_id'));
        if (!isset($user)){
            return view('login');
        }

        $like_esistente= $user->likes()->where('titolo', request('titolo'))->first();
        if($like_esistente != null) {
            $response=array("aggiunto"=>false);
            return $response;
        }
        else{
            $like= new Like;
            $like->user_id= $user->id;
            $like->titolo=request('titolo');
            $like->image=request('image');
            $like->save();

            if($like){
                $response=array("aggiunto"=>true);
            }else{
                $response=array("aggiunto"=>false);
            }
            return $response;
        }   
    }

    public function remove($titolo){

        $user = User::find(Session::get('user_id'));

        if(!Session::get('user_id')){
            return view('login');
        }
        
        $like= $user->likes()->where('titolo', $titolo)->first();
        if($like){
            $like->delete();
            $response=array("rimosso"=>true);
            return $response;
        }else{
            $response=array("rimosso"=>false);;
            return $response;
        }
    }

}

?>