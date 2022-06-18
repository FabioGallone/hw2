@extends('layouts.condiviso')



@section('librerie')
<link rel='stylesheet' href="{{ asset('css/reg.css') }}">
<script src="{{ asset('js/login.js') }}" defer></script>

@endsection



@section('content')
<form name="compilazione_login" method="POST" action="{{ route('login') }}">
@csrf
                   <h1>LOGIN</h1>
            <h3>ENTRA CON LE TUE CREDENZIALI COMPILANDO I MODULI ED EFFETTUA L'ACCESSO</h3>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <h3 class='message_error'>{{$error}}</h3>
                @endforeach
                @endif

       
                <label class="email">E-mail <input type="test" name="email" value="{{ old('email') }}"></label>
                <span class="email">E-mail non valida</span>
                



                <label class="password">Password <input type="password" name="password"></label>
                <span class="password">Inserisci la tua password (almeno 8 caratteri)</span>

                
                <h3>HAI GIA' UN ACCOUNT?</h3>
                <label class="login">&nbsp;<input type="submit" value="LOGIN" name="login"></label>
             

                <h3>NON HAI ANCORA UN ACCOUNT?</h3>
             
               <a class="registrazione" href="{{ route('register') }}">REGISTRATI ORA</a>
              
            </form>

@endsection
