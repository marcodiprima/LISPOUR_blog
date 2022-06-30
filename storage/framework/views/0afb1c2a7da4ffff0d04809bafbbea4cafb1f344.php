

<?php $__env->startSection('head'); ?>
<script src="<?php echo e(asset('js/spotify.js')); ?>" defer></script>
<link rel="icon" type="image/png" href="images/music.png">
<title>Cities Songs</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('namepage'); ?>
<h1>Lispour - songs about cities <h1 class='usern'>@ <?php echo e($username); ?></h1></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ricerca'); ?>
<div>Scopri a quali canzoni corrisponde il nome della tua città preferita</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.api_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/spotify.blade.php ENDPATH**/ ?>