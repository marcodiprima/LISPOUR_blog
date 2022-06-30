@extends('layouts.api_layout')

@section('head')
<script src="{{ asset('js/news_api.js') }}" defer></script>
<link rel="icon" type="image/png" href="images/news.png">
<title>Cities News</title>
@endsection

@section('namepage')
<h1>Lispour - news about cities <h1 class='usern'>@ {{$username}}</h1></h1>
@endsection

@section('ricerca')
<div>Di quale città vuoi conoscere le news?</div>
@endsection