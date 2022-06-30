<html>
    <head>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="{{asset('css/login.css')}}">
        <link rel="icon" type="image/png" href="images/login_registrazione.png">
        @yield('head')
    </head>
    <body>
        <main class="session">
            <div class="sinistra"></div>
            <section class="destra">
            @yield('corpo')
            </section>
        </main>
    </body>
</html>