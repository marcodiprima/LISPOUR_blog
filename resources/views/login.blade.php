@extends('layouts.login_registrazione')

@section('head')
<script src="{{ asset('js/login.js') }}" defer></script>
<script type="text/javascript">
    const REGISTRAZIONE_ROUTE = "{{url('registrazione')}}";
</script>
<title>Login</title>
@endsection

@section('corpo')
<form method="POST" class="log-in" action="{{url('login')}}">
    @csrf
    <h4>Bentornato</h4>
    @if($error == 'campi_vuoti')
    <section class='error'>Compilare tutti i campi.</section>
    @elseif($error == 'wrong')
    <section class='error'>username e/o password errati</section>
    @endif
    <div class="username">
        <label for='username'>Username</label>
        <div class="container"><input type='username' name='username' value="{{old('username')}}" required></div>
        <span>Username non valido</span>
    </div>

    <div class="password">
        <label for='password'>Password</label>
        <div class="container"><input type='password' name='password' value="{{old('password')}}" required></div>
        <span>Password non valida</span>
    </div>
                        
    <div class="submit">
        <input type="submit" id="log" class="button" value="Accedi">
    </div>
    <p>Non hai ancora un account? <a href="{{ url('registrazione') }}"> Registrati</a></p>
</form>
@endsection
