<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\WelcomeController;


Route::get('/', function(){
    return view('welcome');
});

Route::get('registrazione', "App\Http\Controllers\RegistrazioneController@regi_form")->name('registrazione');
Route::post('registrazione', 'App\Http\Controllers\RegistrazioneController@registrati');
Route::get('registrazione/email/{email}', "App\Http\Controllers\RegistrazioneController@checkEmail");
Route::get("registrazione/username/{username}", "App\Http\Controllers\RegistrazioneController@checkUsername");


Route::get('/homepage', "App\Http\Controllers\HomeController@index")->name('homepage');

Route::get("login", "App\Http\Controllers\LoginController@login_form");
Route::post('login', 'App\Http\Controllers\LoginController@accedi');
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name("logout");

// news_api
Route::get('news', 'App\Http\Controllers\NewsController@user_news');
Route::get('news/news_api/{query}', 'App\Http\Controllers\NewsController@news_api');

//spotify_api
Route::get('spotify', 'App\Http\Controllers\SpotifyController@spoti');
Route::get('spotify/searchSpotify/{query}', 'App\Http\Controllers\SpotifyController@searchSpotify');

//profilo
Route::get('profilo', 'App\Http\Controllers\ProfiloController@profile');

//like
Route::get('likes/add', 'App\Http\Controllers\LikeController@add');
Route::get('likes/remove/{titolo}', 'App\Http\Controllers\LikeController@remove');
