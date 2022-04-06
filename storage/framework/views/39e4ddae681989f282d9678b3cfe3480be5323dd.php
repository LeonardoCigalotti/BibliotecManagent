<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/perfil.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<?php $__env->startSection('header'); ?>
    Editar Perfil
<?php $__env->stopSection(); ?>
            <form method="POST" action="/admin/perfil/editar/{id}">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div>
                    <input type="text" name="id" value="<?php echo e($usuario->id); ?>" hidden>
                </div>
                <div class="corpo">
                    <label for="name">Novo Nome: </label>
                    <input type="text" class="input" name="name" id="name" value="<?php echo e($usuario->name); ?>">
                </div>

                <div class="corpo">
                    <label for="email">Novo Nome: </label>
                    <input type="email" class="input" name="email" id="email" value="<?php echo e($usuario->email); ?>">
                </div>

                <button type="submit">Atualizar</button>
            </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layoutInicioAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tmax/Documents/gerenciamento-biblioteca/resources/views/Usuarios/editarperfil.blade.php ENDPATH**/ ?>