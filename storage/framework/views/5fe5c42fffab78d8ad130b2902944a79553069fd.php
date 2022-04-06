<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/perfil.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<?php $__env->startSection('header'); ?>
    Perfil
<?php $__env->stopSection(); ?>
        <?php $__currentLoopData = $usuario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="corpo">
                <label>Nome: </label>
                <input type="text" value="<?php echo e($user->name); ?>" readonly><br>
            </div>

            <div class="corpo">
                <label>E-mail: </label>
                <input type="email" value="<?php echo e($user->email); ?>" readonly>
            </div>

            <div class="corpo">
                <a href="/admin/perfil/editar/{id}">
                    <button>Editar perfil</button>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layoutInicioAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tmax/Documents/gerenciamento-biblioteca/resources/views/Usuarios/perfil.blade.php ENDPATH**/ ?>