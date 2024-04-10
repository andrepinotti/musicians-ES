<?php $__env->startSection('title', 'Show'); ?>


<?php $__env->startSection('content'); ?>
    <h1>Test</h1>

    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($events->name); ?> -- <?php echo e($events->name_musician); ?></p>   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/andre/Documentos/musicians-ES/musician-ES/resources/views//musician.blade.php ENDPATH**/ ?>