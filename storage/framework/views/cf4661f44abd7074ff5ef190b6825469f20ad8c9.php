


<?php $__env->startSection('librerie'); ?>
<link rel='stylesheet' href="<?php echo e(asset('css/reg.css')); ?>">
<script src="<?php echo e(asset('js/signup.js')); ?>" defer></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<form name='compilazione' method="POST" enctype="multipart/form-data" autocomplete="off" action="<?php echo e(route('register')); ?>">
     <!-- Aggiunge il campo csrf al form -->
        <?php echo csrf_field(); ?>
                   <h1>REGISTRAZIONE</h1>
            <h3>REGISTRATI QUI COMPILANDO GLI APPOSITI MODULI CHE LEGGI QUI SOTTO</h3>


                <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3 class='message_error'><?php echo e($error); ?></h3>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

        
                <label class="nome">Nome <input type="text" name="nome" value="<?php echo e(old('nome')); ?>"></label>
                <span class="nome">Nome non valido</span>
                

                <label class="cognome">Cognome<input type="text" name="cognome" value="<?php echo e(old('cognome')); ?>"></label>
                <span class="cognome">Cognome non valido</span>

                <label class="username">Username <input type="text" name="username" value="<?php echo e(old('username')); ?>"></label>
                <span class="username">Username non valido</span>

                <!-- La funzione old accede ai parametri che abbiamo inviato nella precedente richiesta -->
                <label class="email">E-mail <input type="test" name="email" value="<?php echo e(old('email')); ?>"></label>
                <span class="email">E-mail non valida</span>

                <label class="password">Password <input type="password" name="password"></label>
                <span class="password">Inserisci una password di almeno 8 caratteri</span>
                
                <label class="bottone">&nbsp;<input type="submit" name="login"></label>
        
            </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.condiviso', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio\hw2\resources\views/register.blade.php ENDPATH**/ ?>