

<?php $__env->startSection('librerie'); ?>
<link rel='stylesheet' href="<?php echo e(asset('css/carrello.css')); ?>">

<script src="<?php echo e(asset('js/carrellofetch.js')); ?>" defer></script>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>



<div class="flex_container">
        
        <input id="csrf" name="_token" type="hidden" value='<?php echo e(csrf_token()); ?>'>



        <!--
        <?php if(isset($msg)): ?>
        <h1><?php echo e($msg); ?></h1>

        <?php endif; ?>
        -->

        <div id="carrello">
              
               
               

          <!-- -->



        </div>   

        <div id="ordine">
       
        <!-- -->

    
  

        </div>


      

            
</div>



<h1>SALVATI PER DOPO</h1>
<div id="ordina_ora">


<!--
  <div class="ordina">

  <img src="image/logo.png">
  <h1>bellaa</h1>


  </div>

  
  <div class="ordina">

  <img src="image/logo.png">
  <h1>bellaa</h1>


  </div>
-->
</div>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.condiviso', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio\hw2\resources\views/carrello.blade.php ENDPATH**/ ?>