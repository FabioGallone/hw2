@extends('layouts.condiviso')

@section('librerie')
<link rel='stylesheet' href="{{ asset('css/carrello.css') }}">

<script src="{{ asset('js/carrellofetch.js') }}" defer></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('content')



<div class="flex_container">
        
        <input id="csrf" name="_token" type="hidden" value='{{csrf_token()}}'>



        <!--
        @if(isset($msg))
        <h1>{{$msg}}</h1>

        @endif
        -->

        <div id="carrello">
              
               
               

          <!-- -->



        </div>   

        <div id="ordine">
       
        <!-- -->

    
  

        </div>


      

            
</div>



<h1>SALVATI PER DOPO</h1>
<div id="ordina_ora">


<!--
  <div class="ordina">

  <img src="image/logo.png">
  <h1>bellaa</h1>


  </div>

  
  <div class="ordina">

  <img src="image/logo.png">
  <h1>bellaa</h1>


  </div>
-->
</div>
   
@endsection
