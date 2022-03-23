<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/cadLivro.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Reservando livro
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<form method="post"  action="/admin/reservar/{id}"  class="cadLivro">
    <?php echo csrf_field(); ?>
    <div>
        <div>
            <input type="text" name="id" value="<?php echo e($livro->id); ?>" hidden>
        </div>
        <div>
            <label for="title" class="texto">Título</label>
            <input type="text" class="input" name="title" id="title" value="<?php echo e($livro->title); ?>" readonly>
        </div>

        <div>
            <label for="book" class="texto">Descrição do livro</label>
            <textarea name="descricao" id="book" class="textarea" readonly><?php echo e($livro->descricao); ?></textarea>
        </div>

        <div>
            <label for="autor" class="texto">Autor(es)</label>
            <input type="text" class="input" name="autor" id="autor" value="<?php echo e($livro->autor); ?>" readonly>
        </div>

        <div>
            <label for="reservaDias" class="texto">Quntidade de dias (max 10 dias, min 3 dias)</label>
            <input type="number"  id="reservaDias" name="reservaDias" min="3" max="10" value="3">
        </div>


        <button type="submit" class="formButton">Reservar Livro</button>
    </div>
</form>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layoutInicioAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tmax/Documents/gerenciamento-biblioteca/resources/views/Reservas/reservar.blade.php ENDPATH**/ ?>