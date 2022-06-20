<!doctype html>
<html>



<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Musclegym</title>

     
   
   
        <link rel='stylesheet' href="{{ asset('css/condiviso.css') }}">

        @yield('librerie')
   
        
        
        <script src="{{ asset('js/mobile.js') }}" defer></script>  
        

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@800&family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">

       
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0,
        user-scalable=1">
    </head>

    <body>
        <header>
        @yield('trasparenza')

            <nav>
               
                <div class="links">

                    <img src="image/logo.png">
                    <a href="{{ route('home') }}">HOME</a>
                    <a href="{{ route('shop') }}">SHOP</a>
                    <a href="{{ route('carrello') }}">CARRELLO</a>


                    @if(isset($user_id))

                    <a class='button' href="{{ route('logout') }}">{{$user_id['username']}}<br>LOGOUT</a>
                    @else
                    <a class='button' href="{{ route('login') }}">LOGIN</a>
                    
                    @endif
                 
                
                    
                  
                </div>
                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </nav>
        @yield('title')
        </header>



        <section>
        @yield('content')
     
        </section>


           <div id="epilogo">

            <div class="links">
           
                    <a href="{{ route('home') }}">HOME</a>
                    <a href="{{ route('shop') }}">SHOP</a>
                    <a href="{{ route('carrello') }}">CARRELLO</a>


                    @if(isset($user_id))

                    <a class='button' href="{{ route('logout') }}">LOGOUT</a>
                    @else
                    <a class='button' href="{{ route('login') }}">LOGIN</a>

                    @endif      
    

      
           
              
            </div>


      
           
              
         
    
    
            <div>
                <h2>
                    Dove trovarci
                </h2>
                <p>
                    Via Boccaccio 39,<br> Paternò, Sicilia, Italy
                </p>
                <h2>
                    CONTATTACI
                </h2>
                <p>
                    Tel. 3476622157
                </p>
                <a href='https://www.instagram.com/musclegym__/?hl=it'>Pagina instagram</a>
            </div>

            <div>
                <h2>
                    Orari di apertura
                </h2>
                <ol>
                    <li>Lunedì: 9:00 - 22:00</li>
                    <li>Martedì: 9:00 - 22:00</li>
                    <li>Mercoledì: 9:00 - 22:00</li>
                    <li>Giovedì: 9:00 - 22:00</li>
                    <li>Venerdì: 9:00 - 22:00</li>
                    <li>Sabato: 9:00 - 17:00</li>
                    <li>Domenica: CHIUSO</li>
                </ol>



            </div>

            <div>
                <img src="image/logo_bianco.png">
                <p><strong>Musclegym</strong> è una palestra di ultima generazione specializzata nel fitness.</p>
                <p>Lavoriamo con passione per regalare ad ogni nostro atleta qualità e innovazione.</p>
            </div>
         
    
    
    
        </div>

        <footer>

            <p>
                Powered by Fabio Gallone 1000001752</br></br>

                Seguimi sui social:
            </p>

            <div id="footer_buttons">
                <a href='https://www.instagram.com/fabio_gallone/'>Instagram</a>
            </div>
    




        </footer>


    </body>
</html>