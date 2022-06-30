<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;

use Request;



class NewsController extends Controller{

    public function news_api($query){

        $url = "https://newsapi.org/v2/everything?q=".$query."&sortBy=publishedAt&apiKey=f88266878c504bce975444f86ead05f2";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST,0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $headers = array(
            "User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36",
        );

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch); 
        $json = json_decode($result, true);

        curl_close($ch);

        return $result; //in alternativa print_r($result);
    }

    public function user_news(){
        //Controllo di accesso
        if(!Session::get('user_id')){
            return redirect('login');
        }
        //Leggo l'username
        $user = User::find(Session::get('user_id'));
        return view('news')->with('username', $user->username);
    }
}

?>