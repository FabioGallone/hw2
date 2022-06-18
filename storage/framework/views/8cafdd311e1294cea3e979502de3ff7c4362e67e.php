



<?php $__env->startSection('librerie'); ?>
<link rel='stylesheet' href="<?php echo e(asset('css/reg.css')); ?>">
<script src="<?php echo e(asset('js/login.js')); ?>" defer></script>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<form name="compilazione_login" method="POST" action="<?php echo e(route('login')); ?>">
<?php echo csrf_field(); ?>
                   <h1>LOGIN</h1>
            <h3>ENTRA CON LE TUE CREDENZIALI COMPILANDO I MODULI ED EFFETTUA L'ACCESSO</h3>

            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3 class='message_error'><?php echo e($error); ?></h3>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

       
                <label class="email">E-mail <input type="test" name="email" value="<?php echo e(old('email')); ?>"></label>
                <span class="email">E-mail non valida</span>
                



                <label class="password">Password <input type="password" name="password"></label>
                <span class="password">Inserisci la tua password (almeno 8 caratteri)</span>

                
                <h3>HAI GIA' UN ACCOUNT?</h3>
                <label class="login">&nbsp;<input type="submit" value="LOGIN" name="login"></label>
             

                <h3>NON HAI ANCORA UN ACCOUNT?</h3>
             
               <a class="registrazione" href="<?php echo e(route('register')); ?>">REGISTRATI ORA</a>
              
            </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.condiviso', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio\hw2\resources\views/login.blade.php ENDPATH**/ ?>