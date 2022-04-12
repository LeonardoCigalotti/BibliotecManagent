<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/cadLivro.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Adicionar novo livro
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<form method="post" class="cadLivro">
    <?php echo csrf_field(); ?>
    <div>
        <div>
            <label for="title" class="texto">Título</label>
            <input type="text" class="input" name="title" id="title" required>
        </div>

        <div>
            <label for="book" class="texto">Descrição do livro</label>
            <textarea name="descricao" id="book" class="textarea" required></textarea>
        </div>

        <div>
            <label for="autor" class="texto">Autor(es)</label>
            <input type="text" class="input" name="autor" id="autor">
        </div>

        <button type="submit" class="formButton">Cadastrar Livro</button>
    </div>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layoutInicioAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tmax/Documents/gerenciamento-biblioteca/resources/views/livros/criar.blade.php ENDPATH**/ ?>