
@extends('layouts.condiviso')

@section('librerie')
<link rel='stylesheet' href="{{ asset('css/reg.css') }}">
<script src="{{ asset('js/signup.js') }}" defer></script>

@endsection

@section('content')


<form name='compilazione' method="POST" enctype="multipart/form-data" autocomplete="off" action="{{ route('register') }}">
     <!-- Aggiunge il campo csrf al form -->
        @csrf
                   <h1>REGISTRAZIONE</h1>
            <h3>REGISTRATI QUI COMPILANDO GLI APPOSITI MODULI CHE LEGGI QUI SOTTO</h3>


                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <h3 class='message_error'>{{$error}}</h3>
                @endforeach
                @endif

        
                <label class="nome">Nome <input type="text" name="nome" value="{{ old('nome') }}"></label>
                <span class="nome">Nome non valido</span>
                

                <label class="cognome">Cognome<input type="text" name="cognome" value="{{ old('cognome') }}"></label>
                <span class="cognome">Cognome non valido</span>

                <label class="username">Username <input type="text" name="username" value="{{ old('username') }}"></label>
                <span class="username">Username non valido</span>

                <!-- La funzione old accede ai parametri che abbiamo inviato nella precedente richiesta -->
                <label class="email">E-mail <input type="test" name="email" value="{{ old('email') }}"></label>
                <span class="email">E-mail non valida</span>

                <label class="password">Password <input type="password" name="password"></label>
                <span class="password">Inserisci una password di almeno 8 caratteri</span>
                
                <label class="bottone">&nbsp;<input type="submit" name="login"></label>
        
            </form>

@endsection