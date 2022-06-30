<html>
    <head>
        <link rel='stylesheet' href="{{asset('css/profile.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icona_uomo.png">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

        <title>Lispour - quello che ami</title>
    </head>

    <body>
        
        <header>
            <nav>
                <div id="left">
                    <h1>Lispour</h1>
                </div>
                <div id="right">
                    <a href="{{url('homepage')}}">Home &nbsp</a>
                    <a href="{{url('logout')}}">Logout</a><br>
                </div>
            </nav>
        </header>

        <main>
            <section id="profilo">
                <div class="propic">
                </div>
                <div class="user">{{$nome}} {{$cognome}}</div>
                <div class="username">
                    @ {{$username}}
                </div>
                <div class='post_piaciuti'>
                    Elementi piaciuti: {{$numero}}
                </div>
            </section>   
            <div class='liked_tit'>             
                <h1>CITTÀ PREFERITE:</h1>
                <p>
                @foreach ($titolo as $tit)
                    {{ $tit->titolo }}
                @endforeach
                </p>
            </div> 
        </main>

    </body>
</html>