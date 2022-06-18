


<?php $__env->startSection('librerie'); ?>
<link rel='stylesheet' href="<?php echo e(asset('css/shop.css')); ?>">
<script src="<?php echo e(asset('js/fetch_shop.js')); ?>" defer></script>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('trasparenza'); ?>
<div class="trasparenza"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
<div id="titolo">
                <h1>
                    <strong>SHOP</strong> 
                </h1>
</div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
        <h1>
                Acquista le nostre maglie firmate MUSCLEGYM
            </h1>

        <form method="POST">
        <?php echo csrf_field(); ?>

            <div id="flex_container">
            <!-- -->

        </div>
        </form>
 
        
        <h3>
            Altre novità in arrivo. STAY TUNED!
        </h3>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.condiviso', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio\hw2\resources\views/shop.blade.php ENDPATH**/ ?>