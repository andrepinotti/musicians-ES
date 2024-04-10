<?php $__env->startSection('title', 'Show'); ?>
    


<?php $__env->startSection('content'); ?>
    
    <div class="container">
        <div id="" class="title-container">
            <h1>Close your Event right now! Choose the artist you want</h1>
        </div>

        <div class="tendencias mt-2">
            <div class="title-container mt-4">
                <h1>Market trends, the artist with the most shows!</h1>
            </div>


            <div class="musician-data mt-5">
                <p>Artist with the most closed events: <?php echo e($mostFrequentMusician); ?></p>
                
                <p>Your media of payment cache: <?php echo e($media); ?></p>
            </div>
            
        </div>

        <div>
            <a href="/musician" class="btn btn-primary">I want to hire an artist</a>
        </div>
    </div>


    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/andre/Documentos/musicians-ES/musician-ES/resources/views/welcome.blade.php ENDPATH**/ ?>