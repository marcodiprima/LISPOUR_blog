

<?php $__env->startSection('head'); ?>
<script src="<?php echo e(asset('js/login.js')); ?>" defer></script>
<script type="text/javascript">
    const REGISTRAZIONE_ROUTE = "<?php echo e(url('registrazione')); ?>";
</script>
<title>Login</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('corpo'); ?>
<form method="POST" class="log-in" action="<?php echo e(url('login')); ?>">
    <?php echo csrf_field(); ?>
    <h4>Bentornato</h4>
    <?php if($error == 'campi_vuoti'): ?>
    <section class='error'>Compilare tutti i campi.</section>
    <?php elseif($error == 'wrong'): ?>
    <section class='error'>username e/o password errati</section>
    <?php endif; ?>
    <div class="username">
        <label for='username'>Username</label>
        <div class="container"><input type='username' name='username' value="<?php echo e(old('username')); ?>" required></div>
        <span>Username non valido</span>
    </div>

    <div class="password">
        <label for='password'>Password</label>
        <div class="container"><input type='password' name='password' value="<?php echo e(old('password')); ?>" required></div>
        <span>Password non valida</span>
    </div>
                        
    <div class="submit">
        <input type="submit" id="log" class="button" value="Accedi">
    </div>
    <p>Non hai ancora un account? <a href="<?php echo e(url('registrazione')); ?>"> Registrati</a></p>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login_registrazione', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/login.blade.php ENDPATH**/ ?>