

<?php $__env->startSection('head'); ?>
<script src="<?php echo e(asset('js/news_api.js')); ?>" defer></script>
<link rel="icon" type="image/png" href="images/news.png">
<title>Cities News</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('namepage'); ?>
<h1>Lispour - news about cities <h1 class='usern'>@ <?php echo e($username); ?></h1></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ricerca'); ?>
<div>Di quale città vuoi conoscere le news?</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.api_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/news.blade.php ENDPATH**/ ?>