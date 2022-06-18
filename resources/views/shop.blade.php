@extends('layouts.condiviso')


@section('librerie')
<link rel='stylesheet' href="{{ asset('css/shop.css') }}">
<script src="{{ asset('js/fetch_shop.js') }}" defer></script>

@endsection



@section('trasparenza')
<div class="trasparenza"></div>
@endsection

@section('title')
<div id="titolo">
                <h1>
                    <strong>SHOP</strong> 
                </h1>
</div>
@endsection



@section('content')
        <h1>
                Acquista le nostre maglie firmate MUSCLEGYM
            </h1>

        <form method="POST">
        @csrf

            <div id="flex_container">
            <!-- -->

        </div>
        </form>
 
        
        <h3>
            Altre novità in arrivo. STAY TUNED!
        </h3>

@endsection