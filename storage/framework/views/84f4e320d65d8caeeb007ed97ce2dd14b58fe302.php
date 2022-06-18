


<?php $__env->startSection('librerie'); ?>
<link rel='stylesheet' href="<?php echo e(asset('css/hw1.css')); ?>">
<link rel='stylesheet' href="<?php echo e(asset('css/mappa3d.css')); ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>" defer></script>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('trasparenza'); ?>
<div class="trasparenza"></div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('title'); ?>
<div id="titolo">
                <h1>
                    <strong>WE ARE</strong> 
                    <span><em>MUSCLEGYM</em></span>
                </h1>
</div>
     
            <a href="<?php echo e(route('discover')); ?>"><span>SCOPRI DI PIU'</span></a>
   

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

        <div class="flex-container">

        <div class="abbonamento">
        ABBONATI A<br>MUSCLEGYM<br>DA SOLI <span class=text-secondary>40€</span>
        </div>
<div>
    <h2>
        Scopri quanto è facile allenarsi da Musclegym!
    </h2>
        <ol>
            <li>
                Allenamento personalizzato
            </li>
            <li>
                Pagamento con addebito diretto sepa su conto corrente e su carta di credito, unica soluzione anticipata con carta di credito o bancomat
            </li>
            <li>
                Vari piani di abbonamento
            </li>
            <li>
                Quota associativa una tantum 10€
            </li>
        </ol>
   

</div>
</div>


<div class="destra">
<div class="flex-container">

<div class="contenuti">
 
    <h4>
        REPARTO CARDIO FITNESS
    </h4>
    <h6>Le migliori attrezzature per il tuo workout</h6>

    <p>
        Con i nostri macchinari di ultima generazione potrai allenarti per superare i tuoi limiti ogni giorno migliorando il fisico e le performance.
    </p>
   
  
   

</div>



<div>
<img src="image/tapis.jpg">



</div>

</div>
</div>
<div class="sinistra">
<div class="flex-container">


<div class="immagine_sinistra">
    <img src="image/manubri.jpg">

  
</div>


<div class="contenuti">

 
    <h4>
        REPARTO ATTREZZI E PESI
    </h4>
    <h6>Qualità e risultati in un'unica sala</h6>

    <p>
        I nostri macchinari sono forniti da Panatta per garantirti le migliori performance in termini di qualità ed innovazione.
    </p>
   
  
   

</div>

</div>
</div>


<div class="destra">
<div class="flex-container">

<div class="contenuti">
 
    <h4>
        REPARTO TONIFICAZIONE ISOTONICA
    </h4>
    <h6>Un allenamento a dir poco completo! </h6>

    <p>
        Resistenza, definizione muscolare e potenziamento sia della parte alta, sia della parte bassa del tuo corpo! Cosa chiedi di più dal tuo allenamento?
    </p>
   
  
   

</div>



<div>
  <img src="image/tonificazione.jpg">


</div>

</div>
</div>


<div class="mappa3d">
Vuoi visitare la palestra nel dettaglio?
<div id="panorama"> </div>



</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.condiviso', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio\hw2\resources\views/home.blade.php ENDPATH**/ ?>