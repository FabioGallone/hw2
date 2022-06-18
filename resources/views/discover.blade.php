@extends('layouts.condiviso')

@section('librerie')
<link rel='stylesheet' href="{{ asset('css/abbonamento.css') }}">
<script src="{{ asset('js/api_alimenti.js') }}" defer></script>
@endsection


@section('title')
<div id="titolo">
                <h1>
                    <strong>ABBONAMENTO</strong> 
                </h1>
            </div>
@endsection

@section('content')
<form method="POST">
                <span>Cerchi qualche alimento in particolare?</span>
                <input type='text' id='food' name="cibo" placeholder="rice, chicken, carrot ecc...">
                <input type='submit' id='submit' value='cerca ora!'>
            </form>

       

            <div class="flex_container">

                    

            </div>

       



            <div class="flex_container">




            <div class="mensile trasparenza">
                <h1>
                    MENSILE
                </h1>

                <h3>
                    GODI DEI VANTAGGI MUSCLEGYM PER 1 MESE
                </h3>

                <h2>
                    40 EURO
                </h2>
            </div>

            <div class="trimestrale trasparenza">
            
              
                <h1>
                    TRIMESTRALE
                </h1>

                <h3>
                    GODI DEI VANTAGGI MUSCLEGYM PER 3 MESI
                </h3>

                <h2>
                    100 EURO
                </h2>
         
            </div>

            <div class="annuale trasparenza">
               <h1>
                   ANNUALE
               </h1>

               <h3>
                GODI DEI VANTAGGI MUSCLEGYM PER 12 MESI
            </h3>

            <h2>
                350 EURO
            </h2>
            </div>

          

           
        </div>
@endsection
