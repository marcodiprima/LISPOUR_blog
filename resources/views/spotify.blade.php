@extends('layouts.api_layout')

@section('head')
<script src="{{ asset('js/spotify.js') }}" defer></script>
<link rel="icon" type="image/png" href="images/music.png">
<title>Cities Songs</title>
@endsection

@section('namepage')
<h1>Lispour - songs about cities <h1 class='usern'>@ {{$username}}</h1></h1>
@endsection

@section('ricerca')
<div>Scopri a quali canzoni corrisponde il nome della tua città preferita</div>
@endsection