<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <script type="text/javascript">
        const API_ROUTE = "{{url('/')}}/";
        </script>
        <link rel='stylesheet' href="{{asset('css/news_spotify.css')}}">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        @yield('head')
    </head>

    <body>
        <header>
            <nav>
                <div id="left">
                    @yield('namepage')
                </div>
                <div id="right">
                    <a href="{{url('homepage')}}">Home &nbsp</a>
                    <a href="{{url('logout')}}">Logout</a><br>
                </div>
            </nav>
        </header>

        <form name=cerca_news id=cerca_news>
            @yield('ricerca')
            <input type=text id=testo>
            <input type=submit id=invio value="cerca">
        </form>

        <main id='contenitore'>
            <div class='visualizza'>

            </div>
        </main>
    </body>
</html>

