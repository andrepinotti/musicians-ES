<?php $__env->startSection('title', 'Editing'); ?>;


<?php $__env->startSection('content'); ?>
    

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1 class="mt-5">Editing...</h1>
    <form action="/edit/<?php echo e($events->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name" class="mb-2 mt-3">Nome:</label>
            <input type="text" class="form-control mb-2" id="title" name="name" placeholder="Nome do Contratante" value="<?php echo e($events->name); ?>" required>
        </div>
        <div class="form-group">
            <label for="artista" class="mb-2 mt-3">Artista:</label>
            <select name="name_musician" class= "mb-3" value="<?php echo e($events->name_musician); ?>" required>
                <option value="Caetano Veloso">Caetano Veloso</option>
                <option value="Milton Nascimento">Milton Nascimento</option>
                <option value="Lô Borges">Lô Borges</option>
                <option value="Chico Buarque">Chico Buarque</option>
                <option value="Lobão">Lobão</option>
                <option value="Marisa Monte">Marisa Monte</option>
                <option value="Lulu Santos">Lulu Santos</option>
                <option value="Carlinhos Brown">Carlinhos Brown</option>
                <option value="Ivete Sangalo">Ivete Sangalo</option>
                <option value="Iza">Iza</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cache" class="mb-2 mt-3">Cachê:</label>
            <input type="number" class="form-control mb-2" id="title" placeholder="Valor" value="<?php echo e($events->cache); ?>" name="cache" value="cache" required>
        </div>
        <div class="form-group">
            <label for="adress" class="mb-2 mt-3">Endereço:</label>
            <input type="text" class="form-control mb-2" id="title" name="adress" value="<?php echo e($events->adress); ?>" placeholder="Endereço" required>
        </div>
        <div class="form-group">
            <label for="date" class="mb-2 mt-3">Data:</label>
            <input type="date" class="form-control mb-2" id="title" name="date_event" value="<?php echo e($events->date_event); ?>" required>
        </div>

        <input type="submit" class="btn btn-primary mt-2" value="Update Event">

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/andre/Documentos/musicians-ES/musician-ES/resources/views/edit.blade.php ENDPATH**/ ?>