<html>
    <head>
        <link rel='stylesheet' href="<?php echo e(asset('css/profile.css')); ?>">
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
                    <a href="<?php echo e(url('homepage')); ?>">Home &nbsp</a>
                    <a href="<?php echo e(url('logout')); ?>">Logout</a><br>
                </div>
            </nav>
        </header>

        <main>
            <section id="profilo">
                <div class="propic">
                </div>
                <div class="user"><?php echo e($nome); ?> <?php echo e($cognome); ?></div>
                <div class="username">
                    @ <?php echo e($username); ?>

                </div>
                <div class='post_piaciuti'>
                    Elementi piaciuti: <?php echo e($numero); ?>

                </div>
            </section>   
            <div class='liked_tit'>             
                <h1>CITTÀ PREFERITE:</h1>
                <p>
                <?php $__currentLoopData = $titolo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($tit->titolo); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>
            </div> 
        </main>

    </body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/profilo.blade.php ENDPATH**/ ?>