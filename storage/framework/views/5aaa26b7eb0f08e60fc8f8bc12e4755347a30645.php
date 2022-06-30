<html>
    <head>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="<?php echo e(asset('css/login.css')); ?>">
        <link rel="icon" type="image/png" href="images/login_registrazione.png">
        <?php echo $__env->yieldContent('head'); ?>
    </head>
    <body>
        <main class="session">
            <div class="sinistra"></div>
            <section class="destra">
            <?php echo $__env->yieldContent('corpo'); ?>
            </section>
        </main>
    </body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/layouts/login_registrazione.blade.php ENDPATH**/ ?>