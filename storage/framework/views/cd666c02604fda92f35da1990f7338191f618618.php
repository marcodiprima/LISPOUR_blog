<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <script type="text/javascript">
        const API_ROUTE = "<?php echo e(url('/')); ?>/";
        </script>
        <link rel='stylesheet' href="<?php echo e(asset('css/news_spotify.css')); ?>">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <?php echo $__env->yieldContent('head'); ?>
    </head>

    <body>
        <header>
            <nav>
                <div id="left">
                    <?php echo $__env->yieldContent('namepage'); ?>
                </div>
                <div id="right">
                    <a href="<?php echo e(url('homepage')); ?>">Home &nbsp</a>
                    <a href="<?php echo e(url('logout')); ?>">Logout</a><br>
                </div>
            </nav>
        </header>

        <form name=cerca_news id=cerca_news>
            <?php echo $__env->yieldContent('ricerca'); ?>
            <input type=text id=testo>
            <input type=submit id=invio value="cerca">
        </form>

        <main id='contenitore'>
            <div class='visualizza'>

            </div>
        </main>
    </body>
</html>

<?php /**PATH C:\xampp\htdocs\hw2\resources\views/layouts/api_layout.blade.php ENDPATH**/ ?>