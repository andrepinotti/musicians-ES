<?php $__env->startSection('title', 'Dashboard'); ?>


<?php $__env->startSection('content'); ?>

    <div class="col-md-10 offset-md01 dashboard-title-container">
        <h1>Events</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        <?php if(count($events) > 0): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope=col></th>
                        <th scope="col">Contractor's Name</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Cache</th>
                        <th scope="col">Adress</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row"><?php echo e($loop->index + 1); ?></td><!-- index of events -->
                            <td><?php echo e($event->name); ?></td>
                            <td><?php echo e($event->name_musician); ?></td>
                            <td><?php echo e($event->cache); ?></td>
                            <td><?php echo e($event->adress); ?></td>
                            <td><?php echo e($event->date_event); ?></td>
                            <td>
                                <a href="/edit/<?php echo e($event->id); ?>" class="btn btn-info edit-btn"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                <form action="/dashboard/<?php echo e($event->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger delete-btn align-middle">
                                        <i class="fa-solid fa-trash-can"></i> Delete
                                    </button>
                                </form>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>        
        <?php else: ?>
            <p>There are no events available</p>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/andre/Documentos/musicians-ES/musician-ES/resources/views/dashboard.blade.php ENDPATH**/ ?>