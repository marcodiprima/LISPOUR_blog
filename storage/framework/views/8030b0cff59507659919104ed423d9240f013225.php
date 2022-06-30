<html>
</body>


<form method="POST" enctype="multipart/form-data" autocomplete="off" action="<?php echo e(url('re')); ?>">
            <?php echo csrf_field(); ?>
                <label for='username'>Username</label>
                <div class="container"><input type='username' name='username' value='<?php echo e(old("username")); ?>' required></div>

                <label for='password'>Password</label>
                <div class="container"><input type='password' name='password' value='<?php echo e(old("password")); ?>' required></div>
            
            <div class="submit">
                <input type="submit" id="log" class="button" value="Registrati">
            </div>
        </form>
        </section>

</body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/re.blade.php ENDPATH**/ ?>