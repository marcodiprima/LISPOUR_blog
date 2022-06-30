

<?php $__env->startSection('head'); ?>
<script src="<?php echo e(asset('js/registrazione.js')); ?>" defer></script>
        <script type="text/javascript">
            const REGISTRAZIONE_ROUTE = "<?php echo e(url('registrazione')); ?>";
        </script>
        <title>Registrazione</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('corpo'); ?>
<form method="POST" enctype="multipart/form-data" autocomplete="off" action="<?php echo e(url('registrazione')); ?>">
    <?php echo csrf_field(); ?>
    <h1>Benvenuto</h1>
    <?php if($error =='campi_vuoti'): ?>
    <section class='error'>Compilare tutti i campi.</section>
    <?php elseif($error =='utente_esistente'): ?>
    <section class='error'>Username già esistente.</section>
    <?php endif; ?>

    <div class="nome">
        <label for='nome'>Nome</label>
        <div class="container"><input type='nome' name='nome' value='<?php echo e(old("nome")); ?>' required></div>
        <span>Nome non valido</span>
    </div>
    <div><input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'></div>

    <div class="cognome">
        <label for='cognome'>Cognome</label>
        <div class="container"><input type='cognome' name='cognome' value='<?php echo e(old("cognome")); ?>' required></div>
        <span>Cognome non valido</span>
    </div>

    <div class="username">
        <label for='username'>Username</label>
        <div class="container"><input type='username' name='username' value='<?php echo e(old("username")); ?>' required></div>
        <span><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    </div>

    <div class="email">
        <label for='email'>Email</label>
        <div class="container"><input type='email' name='email' placeholder='mariorossi@gmail.com'  value='<?php echo e(old("email")); ?>' required></div>
        <span><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    </div>

    <div class="password">
        <label for='password'>Password</label>
        <div class="container"><input type='password' name='password' value='<?php echo e(old("password")); ?>' required></div>
        <span>Password non valida</span>
    </div>
            
    <div class="submit">
        <input type="submit" id="log" class="button" value="Registrati">
    </div>

    <p>Hai già un account? <a href="<?php echo e(url('login')); ?>">Accedi</a></p>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.login_registrazione', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/registrazione.blade.php ENDPATH**/ ?>